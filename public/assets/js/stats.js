const food = document.getElementById("food").textContent;
const accommodation = document.getElementById("accommodation").textContent;
const transport = document.getElementById("transport").textContent;
const digital = document.getElementById("digital").textContent;

let resultbyCategory = [
    { name: "Alimentation", value: food },
    { name: "Logement", value: accommodation },
    { name: "Transport", value: transport },
    { name: "Numérique", value: digital },
];

const labels = [
    resultbyCategory[0].name,
    resultbyCategory[1].name,
    resultbyCategory[2].name,
    resultbyCategory[3].name,
];

const data = {
    labels: labels,
    datasets: [
        {
            backgroundColor: [
                "#0F5B01",
                "#2ecc71",
                "rgb(240,147,145)",
                "#f39c12",
            ],
            borderColor: "#f1c40f",
            data: [
                resultbyCategory[0].value,
                resultbyCategory[1].value,
                resultbyCategory[2].value,
                resultbyCategory[3].value,
            ],
        },
    ],
};

const config = {
    type: "doughnut",
    data: data,
    options: {},
};

const myChart = new Chart(document.getElementById("myChart"), config);
