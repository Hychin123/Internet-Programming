<template>
  <div id="app">
    <div class="container">
      <table>
        <tr>
          <td colspan="5">
            <div id="screen">
              <span id="screen_top">M=0</span>
              <div id="screen_bottom">
                <!-- v-text is a directive that is used to replace the content of HTML tag with private data -->
                <!-- It will update the content automatically when data is changed. It is called data reactive -->
                <span v-text="inputNumber" id="operand1"></span>
                <span id="operator"></span>
                <span id="operand2"></span>
              </div>
              <!-- <span id="screen_bottom">0</span> -->
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <button type="button" class="btn btn-warning"  @click="memoryClear">MC</button>
          </td>
          <td>
            <button type="button" class="btn btn-warning" @click="memoryRecall">MR</button>
          </td>
          <td>
            <button type="button" class="btn btn-warning"  @click="memorySubtract">M-</button>
          </td>
          <td>
            <button type="button" class="btn btn-warning" @click="memoryAdd">M+</button>
          </td>
          <td> 
            <button type="button" class="btn btn-light">
              <i class="fa fa-long-arrow-right" aria-hidden="true"  @click="clearEntry"></i>
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(7)">7</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(8)">8</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(9)">9</button>
          </td>
          <td>
            <button type="button" class="btn btn-secondary" @click="applyOperation('/')">÷</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="changeSign">+/-</button>
          </td>
        </tr>
        <tr>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(4)">4</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(5)">5</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(6)">6</button>
          </td>
          <td>
            <button type="button" class="btn btn-secondary"  @click="applyOperation('*')">x</button>
          </td>
          <td>
            <button type="button" class="btn btn-secondary"  @click="applyOperation('-')">-</button>
          </td>
        </tr>
        <tr>
          <td>
            <button
              v-on:click="showNumber(1)"
              type="button"
              class="btn btn-light"
            >
              1
            </button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(2)">2</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(3)">3</button>
          </td>
          <td rowspan="2">
            <button type="button" class="btn btn-secondary long-btn"  @click="applyOperation('+')">+</button>
          </td>
          <td rowspan="2">
            <button type="button" class="btn btn-primary long-btn" @click="calculate()">=</button>
          </td>
        </tr>
        <tr>
          <td>
            <button type="button" class="btn btn-danger" @click="clear">C</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber(0)">0</button>
          </td>
          <td>
            <button type="button" class="btn btn-light" @click="showNumber('.')">.</button>
          </td>
        </tr>
      </table>
    </div>
    <div class="alert alert-danger" id="message_panel" role="alert">
      something wrong here
    </div>
  </div>
</template>

<script>
export default {
  name: 'App',
  components: {},
  data() {
    return {
      // This is the private data section which can be used inside this component
      inputNumber: 0,
      operand1 : 0,
      operation: null,
      memory: 0,
    };
  },
  methods: {  
    showNumber(number) {
      // Assign number when user click to the inputNumber data
      // To access private data from methods, use (this.)
      this.inputNumber = this.inputNumber*10 + number;
    },

  applyOperation(operation){
      this.operation = operation;
      this.operand1 = this.inputNumber;
      this.inputNumber = 0;
  },  
  calculate(){
   if(this.operand1 !== null && this.inputNumber !== null &&this.operation !== null){
  switch(this.operation){
    case "+": this.inputNumber = this.operand1 + this.inputNumber;
      break;
    case "-": this.inputNumber = this.operand1 - this.inputNumber;
      break;
    case "*": this.inputNumber = this.operand1 * this.inputNumber;
      break;
    case "/": this.inputNumber = this.operand1 / this.inputNumber;
      break;
    default: console("error");
  }
    }
  },
    memoryClear() {
      this.memory = 0;
    },
    memoryRecall() {
      this.inputNumber = this.memory;
    },
    memorySubtract() {
      this.memory -= this.inputNumber;
    },
    memoryAdd() {
      this.memory += this.inputNumber;
    },
    clear() {
      this.inputNumber = 0;
      this.operand1 = 0;
      this.operation = null;
    },
    
    changeSign() {
      this.inputNumber *= -1;
    },
    clearEntry() {
      this.inputNumber = 0;
    },
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.container {
  margin-top: 10em;
  width: 300px;
  border: 1px solid black;
  padding-top: 20px;
  padding-bottom: 20px;
}
table {
  border-spacing: 7px;
  border-collapse: separate;
}
#screen {
  border: 1px solid black;
  padding: 7px;
  width: 100%;
  height: 4em;
}
#screen_top {
  display: block;
  font-size: 0.8rem;
}
#screen_bottom {
  font-size: 1.8rem;
  display: block;
  text-align: right;
}
#operand2 {
  background-color: skyblue;
}
#operator {
  background-color: rosybrown;
}
.button-row {
  display: flex;
  justify-content: space-between;
}
button {
  width: 45px;
}
.long-btn {
  display: inline-block;
  height: 80px;
}

/* Message panel */
#message_panel {
  width: 300px;
  margin-top: 1em;
  display: none;
  margin-left: auto;
  margin-right: auto;
}
</style>
