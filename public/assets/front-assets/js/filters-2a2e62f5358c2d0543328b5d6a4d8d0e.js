(function ($) {
	'use strict';

window.onload = () => {
    const SortingsForm = $("#sortings").get(0);
    const FiltersForm = $("#filters").get(0);
    const SearchForm = $("#widgets-searchbox").get(0);
      $("#filters input, #sortings select, #widgets-searchbox input").on("change, change, input", function () {
            // Données du formulaire
            const Filters = new FormData(FiltersForm);
            const Sortings = new FormData(SortingsForm);
            const Search = new FormData(SearchForm);

            // QueryString
            const Params = new URLSearchParams();

            Filters.forEach((value, key) => {
                if(value){
                    Params.append(key, value);
                }
                
            });
            Sortings.forEach((value, key) => {
                if(value){
                    Params.append(key, value);
                }
                
            });
             Search.forEach((value, key) => {
                if(value){
                    Params.append(key, value);
                }
                
            });

            // Url active
            const Url = new URL(window.location.href);
    
            // lancer la requête ajax
            fetch(Url.pathname + "?" + Params.toString() + "&ajax=1", {
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(response => 
                response.json()
            ).then(data => {
                // Chercher la zone de contenu
                const content = document.querySelector("#content");

                // Remplacer le contenu
                content.innerHTML = data.content;

                // Mettre à jour l'url
                history.pushState({}, null, Url.pathname + "?" + Params.toString());
            }).catch(
                content.innerHTML = "<p class='mt-6'>Aucun résultat trouvé</p>"

            );
        });
 
}



})(jQuery);