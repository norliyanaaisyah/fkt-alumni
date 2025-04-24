$(function () {

    

     


 


    var barData = {
        labels: ["Phylum", "Class", "Order", "Family", "Genus", "Total", "Taxonomy"],
        datasets: [
            {
                label: "Fauna",
                backgroundColor: 'rgba(165, 39, 20, 0.5)',
                pointBorderColor: "#fff",
                data: [365, 259, 380, 481, 256, 155, 340]
            },
            {
                label: "Flora",
                backgroundColor: 'rgba(9,113,56,0.5)',
                pointBorderColor: "#fff",
                data: [428, 548, 340, 319, 586, 327, 390]
            }
        ]
    };

    var barOptions = {
        responsive: true
    };


    var ctx2 = document.getElementById("barChart").getContext("2d");
    new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});

    

});