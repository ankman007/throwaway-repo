// function example
int add(int num1, int num2){
  return num1 + num2;
}

// control statement
void isEligible(int age){
  if (age >= 18){
    print("Eligible");
  }
  else {
    print('Not eligible');
  }
}

// asynchronous programming
Future<String> fetchUserOrder() {
  return Future.delayed(Duration(seconds: 2), () => 'Coffee');
}

// OOP; classes
class Person {
  String std_name;
  int std_age;

  Person(
    this.std_name,
    this.std_age,
  );

  void display(){
    print('Name: $std_name, Age: $std_age');
  }
}

void main() async{  

  print('Hello World!');
  
  // numbers; int, double
  int num = 22;


  // string; "", '', ''' '''
  String name = 'ankit';


  // booleans; bool variable_name = true
  bool isOk = false;


  // list; similar to arrays, collection of objects
  List<int> nums = [22, 33, 44, 55, 66];
  List<String> names = ['ankit', 'ankman'];


  // sets; only stores unique sets of value
  // Set<String> colors = ['blue', 'red', 'pink']
  Set<String> subjects = {'AI', 'DSA', 'DS'};


  // similar to dictionary; key value pair 
  Map<int, String> posts = {
    1: 'AI',
    2: 'DSA',
    3: 'DS',
  };


  // creating the instance of the class Person
  var person = Person('ankit', 99);
  person.display();


  // for loop 
  int n = 5;
  for (int i = 1; i <= n; i++){
    if ( i == 3)
      break;
    print(i);
  }


  // for in
  for (String name in names) {
    print(name);
  }


  // while 
  int j = 0;
  while (j <= names.length){
    if ( j == 2){
      j++;
      continue;
    }
    print(j);
    j++;
  }


  // do-while
  int k = 3;
  do {
    print(k);
    k++;
  } while(k < 5);


  // asynchronous programming
  // print('Fecthing user order...');
  // var order = await fetchUserOrder();
  // print('Order: $order');

  
  isEligible(num);
  add(2, 6);
}

