function ajax_search_articles(text) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("search-result").innerHTML = xhr.responseText;
        }
    }
    xhr.open("GET", "../includes/processes/article-search.process.php?text=" + text, true);
    xhr.send(null);
}