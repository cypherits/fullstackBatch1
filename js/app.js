function my_first_function(){
	alert('hello World!');
}

my_first_function();

function this_function_returns_a_value(){
	return 'Hello World!';
}
var x = this_function_returns_a_value();

document.getElementById('greetings').innerHTML = x;

var y = function(){
	document.getElementById('second').innerHTML += 'hello ';
}

y();
y();
y();

var z = (x, y) => x + y;

var a = (x, y) => {
	return x + y;
}

console.log(z(5, 3));
console.log(z(8, 10));
console.log(a(7, 5));

function addition(x = 0, y = 0){
	return x + y;
}

console.log(addition());
console.log(addition(5));
console.log(addition(5, 6));
console.log(addition(5, 6, 3));

function avarage(){
	// console.log(arguments);
	let sum = 0;
	for(x of arguments){
		sum += x;
	}
	return sum / arguments.length;
}

// avarage(50, 60, 38, 45, 67, 39);
console.log(avarage(50, 60, 38, 45, 67, 39));

function xy(x, y, callback){
	let z = x * y;
	callback(z);
}

xy(5, 6, function(a){
	alert(a);
});
xy(5, 8, function(a){
	console.log(a);
});

function xz(callback){
	var x = '';
	setTimeout(function(){
		x = 'found data';
		callback(x);
	}, 3000);
}

xz(function(x){
	document.getElementById('find').innerHTML = x;
});

function myCallback(x){
	console.log(x);
}
xz(myCallback);

document.getElementById('myButton').addEventListener('mouseout', function(){
	document.getElementById('greetings').style.background = 'red';
	document.getElementById('greetings').style.color = 'white';
});
document.getElementById('input').addEventListener('keyup', function(e){
	console.log(e.key);
});

document.getElementById('file').addEventListener('change', function(e){
	console.log(e);
})