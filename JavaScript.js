function enterKeyPressed(event) {
    if (event.keyCode == 13) {
        console.log("Enter key is pressed");
        window.location.href = "book.php";
    } else {
        window.location.href = "new.php";;
    }
}