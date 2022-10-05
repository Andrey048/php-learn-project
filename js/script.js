'use strict'

// Счетчик на замыканиях

// function makeCounter(startCount) {
// 	let count = startCount;

// 	function changeBy(val) {
// 		count += val;
// 	}

// 	return {
// 		increment: function() {
// 			changeBy(1);
// 		},
// 		dicrement: function() {
// 			changeBy(-1);
// 		},
// 		value: function() {
// 			console.log(count);
// 		}
// 	};
// }

// const counter0 = makeCounter(0);



// this практика

// let calculator = {
// 	numberOne: undefined,
// 	numberTwo: undefined,
// 	read: function() {
// 		this.numberOne = Number(prompt('Введите первое число!'));
// 		this.numberTwo = Number(prompt('Введите второе число!'));
// 	},
// 	sum: function() {
// 		console.log(this.numberOne + this.numberTwo);
// 	},
// 	mul: function() {
// 		console.log(this.numberOne * this.numberTwo);		
// 	}
// };

// calculator.read();
// calculator.sum();
// alert( calculator.mul() );


let ladder = {
  step: 0,
  up() {
    this.step++;

    return this;
  },
  down() {
    this.step--;
  },
  showStep: function() { // показывает текущую ступеньку
    alert( this.step );
  }
};
