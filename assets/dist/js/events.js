/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/src/js/events.js":
/*!*********************************!*\
  !*** ./assets/src/js/events.js ***!
  \*********************************/
/***/ (() => {

eval("var x = \"Event działa\";\nfunction mojaFunkcja() {\n  document.getElementById(\"mojeid\").innerHTML = x;\n}\nfunction pierwsza(x) {\n  x.style.height = \"1200px\";\n  x.style.width = \"1200px\";\n}\nfunction druga(x) {\n  x.style.height = \"600px\";\n  x.style.width = \"600px\";\n}\ndocument.getElementById(\"mojeid1\").addEventListener(\"scroll\", myFunction);\nfunction myFunction() {\n  document.getElementById(\"mojeid2\").innerHTML = \"teraz scrollujesz!\";\n}\nfunction walidacja() {\n  var inp1 = document.getElementById(\"pole1\");\n  if (!inp1.checkValidity()) {\n    document.getElementById(\"info\").innerHTML = inp1.validationMessage;\n  } else {\n    document.getElementById(\"info\").innerHTML = \"Wartosc ok\";\n  }\n}\nfunction alamakota() {\n  var i = 5;\n  for (var i = 0; i < 10; i++) {\n    console.log(i);\n    document.write(\"Ala ma kota\");\n  }\n}\nfunction obiekty() {\n  // const array = \n  // [\n  //     {marka: \"Ford\" , model: \"Mondeo\" , rok_produkcji: 2010}\n  //     {marka: \"Mercedes\" , model: \"E220\" , rok_produkcji: 2012}\n  // ]\n  var car = {\n    marka: \"Ford\",\n    model: \"Mondeo\",\n    rok_produkcji: 2010\n  };\n  if (car.rok_produkcji > 2000) {\n    document.getElementById(\"info\").innerHTML = \"Samochód nowszy niż 2000 rok\";\n  } else {\n    document.getElementById(\"info\").innerHTML = \"Samochód starszy niż 2000 rok\";\n  }\n\n  // if(array[1].car.rok_produkcji<2012) {\n  //     document.getElementById(\"info\").innerHTML = \"Samochód starszy niż 2000 rok\"\n  // }\n  // else {\n  //     document.getElementById(\"info\").innerHTML = \"Samochód nowszy niż 2000 rok\"\n  // }\n}\n\nvar array_cars = [\"Audi\", \"BMW\", \"Mercedes\", \"Skoda\"];\nvar i = 0;\nvar text = \"\";\nwhile (array_cars[i]) {\n  text += array_cars[i] + \"&nbsp\";\n  console.log(array_cars[i]);\n  i++;\n}\ndocument.getElementById(\"info\").innerHTML = text;\n\n//# sourceURL=webpack://blank-theme/./assets/src/js/events.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/src/js/events.js"]();
/******/ 	
/******/ })()
;