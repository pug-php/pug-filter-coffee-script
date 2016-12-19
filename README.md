# pug-filter-coffee-script

[![Latest Stable Version](https://poser.pugx.org/pug-php/pug-filter-coffee-script/v/stable.png)](https://packagist.org/packages/pug-php/pug-filter-coffee-script)
[![Build Status](https://travis-ci.org/pug-php/pug-filter-coffee-script.svg?branch=master)](https://travis-ci.org/pug-php/pug-filter-coffee-script)
[![Code Climate](https://codeclimate.com/github/pug-php/pug-filter-coffee-script/badges/gpa.svg)](https://codeclimate.com/github/pug-php/pug-filter-coffee-script)
[![Test Coverage](https://codeclimate.com/github/pug-php/pug-filter-coffee-script/badges/coverage.svg)](https://codeclimate.com/github/pug-php/pug-filter-coffee-script/coverage)
[![StyleCI](https://styleci.io/repos/61806854/shield?branch=master)](https://styleci.io/repos/61806854)

This template:
```pug
body
  :coffee-script
    # Assignment:
    number   = 42
    opposite = true

    # Conditions:
    number = -42 if opposite

    # Functions:
    square = (x) -> x * x

    # Arrays:
    list = [1, 2, 3, 4, 5]

    # Objects:
    math =
      root:   Math.sqrt
      square: square
      cube:   (x) -> x * square x

    # Splats:
    race = (winner, runners...) ->
      print winner, runners

    # Existence:
    alert "I knew it!" if elvis?

    # Array comprehensions:
    cubes = (math.cube num for num in list)
```

will be rendered like this:
```html
<body>
  <script type="text/javascript">
    var cubes, list, math, num, number, opposite, race, square,
    __slice = [].slice;

    number = 42;

    opposite = true;

    if (opposite) {
      number = -42;
    }

    square = function(x) {
      return x * x;
    };

    list = [1, 2, 3, 4, 5];

    math = {
      root: Math.sqrt,
      square: square,
      cube: function(x) {
        return x * square(x);
      }
    };

    race = function() {
      var runners, winner;
      winner = arguments[0], runners = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return print(winner, runners);
    };

    if (typeof elvis !== "undefined" && elvis !== null) {
      alert("I knew it!");
    }

    cubes = (function() {
      var _i, _len, _results;
      _results = [];
      for (_i = 0, _len = list.length; _i < _len; _i++) {
        num = list[_i];
        _results.push(math.cube(num));
      }
      return _results;
    })();
  </script>
</body>
```
