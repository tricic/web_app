function ajax_last_articles(element, limit, category) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById(element).innerHTML += xhr.responseText;
        }
    }
    if(category == null) {
        xhr.open("GET", "includes/process.article.list.php?limit=" + limit, true);
    } else {
        xhr.open("GET", "includes/process.article.list.php?limit=" + limit + "&category_id=" + category, true);
    }
    xhr.send(null);
}