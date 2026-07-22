var elList = document.getElementById('list');
var count = document.getElementById('counter');
var addBtn = document.getElementById('addToList');
var input = document.querySelector('input[type="text"]');

function addItem() {
    var itemName = input.value.trim();
    if (itemName === "") {
        alert("Please enter an item name.");
        return;
    }
    var newEl, newElText;
    newEl = document.createElement('div');
    newElText = document.createTextNode(itemName);
    newEl.appendChild(newElText);
    newEl.classList.add('alert');
    newEl.classList.add('alert-info');
    elList.appendChild(newEl);

    input.value = '';
    var total = elList.getElementsByClassName('alert').length;
    count.textContent = total;
}

elList.onclick = function(e) {
    if (e.target.classList.contains('alert')) {
        elList.removeChild(e.target);
        count.textContent = elList.getElementsByClassName('alert').length;
    }
};


addBtn.addEventListener('click', addItem, false);