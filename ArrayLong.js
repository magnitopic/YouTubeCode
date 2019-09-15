var cities = ["Berlin", "Dublin", "London", "Madrid", "Rome", "Washington"]
console.log(cities)

for(var k=1;
    k <= 100;
    k++){
	// var box = ""
	var city1 = Math.floor(Math.random()*6)
	var city2 = Math.floor(Math.random()*6)
	box = cities[city2]
	cities[city2] = cities[city1]
	cities[city1] = box
}

console.log(cities)

/*Don´t forget to change the value
according to the number of values that your array has */
