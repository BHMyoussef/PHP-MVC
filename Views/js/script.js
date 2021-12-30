let ctx1 = document.getElementById('chart1').getContext('2d');
let ctx2 = document.getElementById('chart2').getContext('2d');
let ct1 = document.getElementById('chart1');
let ct2 = document.getElementById('chart2');

let val1 = ct1.getAttribute("val");
let val2 = ct2.getAttribute("val");
const vals = [val1,val2];

let labels = ["team's Occupancy Rate ","Occupancy Rate Of Number Proposed"];
let colorHex = ['#253D5B', '#ddd'];

const ctxs = [ctx1, ctx2];
ctxs.forEach((ctx,i) => {
  console.log("test")

let myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [vals[i], 100 - vals[i]],
      backgroundColor: colorHex
    }],
    labels: [labels[i]]
  },
  options: {
    responsive: true,
    legend: {
      position: 'left'
    },
    
  }
})
})