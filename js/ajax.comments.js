function ajax_comments(id) {
    if(id == null) {
        console.log("ID is not set!");
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("comments-list").innerHTML = xhr.responseText;
        }
    }
    xhr.open("GET", "includes/processes/comment-printer.process.php?id=" + id, true);
    xhr.send(null);
}

function ajax_remove_comment(id, username) {
    var xhr = new XMLHttpRequest();

    xhr.open("POST", "includes/processes/comment-delete.process.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    }
    xhr.send("id=" + id + "&username=" + username);
}

function ajax_add_comment(comment, article_id) {
    var xhr = new XMLHttpRequest();

    xhr.open("POST", "includes/processes/comment-add.process.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    }
    xhr.send("comment=" + comment + "&article_id=" + article_id);
}