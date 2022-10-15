class Queue {
    constructor() {
      this.queue = [];
    }
  
    enqueue(element) { 
      this.queue.push(element);  //insertar elemento
      return this.queue;
    }
  
    dequeue() { //extrae el primer elemento
      return this.queue.shift();
    }
  
    peek() { //elemento en la cima (primero en la cola)
      return this.queue[0];
    }
  
    size() { //tamaño de la cola
      return this.queue.length;
    }
  
    isEmpty() { //para saber si está vacía
      return this.queue.length === 0;
    }
  
    print() { //imprime elementos de la cola
      return this.queue;
    }


    clean() { //limpia la cola
      return this.queue.length=0;
    }


    end() { //retorna el último elemento de la cola
      return this.queue.pop();
    }

    search(buscar) { //busca elemento
      let indice = this.queue.indexOf(buscar);
     return indice;
    }

  }
  
 