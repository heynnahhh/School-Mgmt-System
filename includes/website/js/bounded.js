var element = document.getElementsByClassName('tree')[0],
    labelX = document.getElementsByClassName('coords-x')[0],
    labelY = document.getElementsByClassName('coords-y')[0];

// options
var options = {
	limit: {                // limit the drag bounds
      x:null,             // [minimum position, maximum position] || position
      y:[390, 390]             // [minimum position, maximum position] || position
    },
    onDrag: function (element, x, y) {
        labelX.innerHTML = x;
        labelY.innerHTML = y;
		
    }
};

// initialize drag
new Draggable(element, options);