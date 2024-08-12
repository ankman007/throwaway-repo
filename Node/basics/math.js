function add(num1, num2){
    return num1 + num2;
}

function subtract(num1, num2){
    return num1 - num2;
}

module.exports = {
    addFn: add,
    subFn: subtract
};

exports.add1 = (a, b) => a + b;
exports.sub1 = (a, b) => a - b;
