const result = document.getElementById('resultCategories');

//preparing the loading of average by category
result.addEventListener('click', function() {
    const food = document.getElementById('food').value;
    const accommodation = document.getElementById('accommodation').value;
    const transport = document.getElementById('transport').value;
    const digital = document.getElementById('digital').value;

    let resultbyCategory = [food, accommodation, transport, digital];
    resultbyCategory.sort();

    const cat1 = document.getElementById('cat1');
    cat1.innerHTML = resultbyCategory[0];
    const cat2 = document.getElementById('cat2');
    cat1.innerHTML = resultbyCategory[1];
    const cat3 = document.getElementById('cat3');
    cat1.innerHTML = resultbyCategory[2];
    const cat4 = document.getElementById('cat4');
    cat1.innerHTML = resultbyCategory[3];
});