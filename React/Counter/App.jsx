import { useState, useEffect } from "react";

function App() {
  const [counter, setCounter] = useState(15)
  useEffect (() =>{
    if (counter > 20){
      setCounter(20)
    }
    if (counter <= 0){
      setCounter(0)
    }
  })
  const increaseValue = () =>{
    // counter += 1
    setCounter(counter + 1)
  }

  const decreaseValue = () => {
    setCounter(counter - 1)
  }

  return (
    <>
      <h1>Counter value: {counter}</h1>
      <button onClick={increaseValue}>Increase Value</button>
      <button onClick={decreaseValue}>Decrease Value</button>
    </>
  )
}

export default App
