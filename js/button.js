var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = '';
    }
    else {
        // создание элемента img
        var img = document.createElement("img");
        // устанавливаем источник картинки
        img.src = "https://media.istockphoto.com/id/1457353108/ru/%D1%84%D0%BE%D1%82%D0%BE/%D1%85%D0%B0%D0%BA%D0%B5%D1%80.jpg?s=612x612&w=0&k=20&c=igoNNB1rIoB2ZBjt5g9pWsB6DESR1acubRMULMNtrT0=";
        // добавление картинки в тег img
        document.getElementById("demo").appendChild(img);
    }
}