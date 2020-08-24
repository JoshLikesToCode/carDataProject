				function removeSessionID() {
				var elem = document.getElementById('sessionID');
				elem.parentNode.removeChild(elem);
				
				var colElems = document.getElementsByClassName('sessionIDtd')
					for (var i = 0; i < colElems.length; i+2) {
    						colElems[i].remove()
					}
				}


				function removeUsername() {
					var elem = document.getElementById('username');
					elem.parentNode.removeChild(elem);

					var colElems = document.getElementsByClassName('usernametd')
						for (var i = 0; i < colElems.length; i+2) {
							colElems[i].remove()
						}
				}

				function removeDate() {
					var elem = document.getElementById('date');
					elem.parentNode.removeChild(elem);

					var colElems = document.getElementsByClassName('datetd')
					for (var i =0; i < colElems.length; i+2) {
						colElems[i].remove()
					}
				}

				function removeWidth() {
					var elem = document.getElementById('width');
					elem.parentNode.removeChild(elem);
					
					var colElems = document.getElementsByClassName('widthtd')
					for (var i = 0; i < colElems.length; i+2) {
                                                     colElems[i].remove()
					}
				}

				function removeActive() {
                                        var elem = document.getElementById('active');
                                        elem.parentNode.removeChild(elem);

                                        var colElems = document.getElementsByClassName('activetd')
                                        for (var i = 0; i < colElems.length; i+2) {
                                                        colElems[i].remove()
                                        }
                                }

       
