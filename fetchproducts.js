fetch('./ProductJSON.php').then(response => {
    return response.json();
}).then(data => {
    // Work with JSON data here
    //console.log(data.length);
    showProducts(data);

}).catch(err => {
    // Do something for an error here
});

function showProducts(data) {

    const container = document.getElementById("container");
    var ul = document.createElement('ul');
    container.appendChild(ul);
    for (let i = 0; i < data.length; i++) {

        var li = document.createElement('li');
        var text = document.createTextNode(data[i].prd_name);
        li.appendChild(text);
        ul.appendChild(li);

    }

}