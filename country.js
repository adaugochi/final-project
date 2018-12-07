
		var cou = document.getElementById('country');
		cou.addEventListener('mousedown', loadCountry);

		function loadCountry() {
			var xhr = new XMLHttpRequest();
			//console.log(xhr);
			xhr.open('GET', 'country.json', true);

			xhr.onload = function () {
				if(this.status == 200) {
					var listCountry = JSON.parse(this.responseText);

					for (var i = 0; i < listCountry.length; i++) {
						var listCountries = listCountry[i].name;
				
						var option = document.createElement('option');

						var optionText = document.createTextNode(listCountries);

						option.appendChild(optionText);

						cou.appendChild(option);
					}
				}
			}
			xhr.send();
		}
