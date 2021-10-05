const getFigure = async () => {
    let canvas = document.getElementById("imageCanvas");

    const response = await fetch(`http://localhost/getFigure`);
    const file = await response.text();
    if (file.length === 0) {
        return;
    }
    canvas.innerHTML = `<img src="images/temp_image.png" />`;
}

getFigure();
