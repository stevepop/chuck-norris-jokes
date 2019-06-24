# Chuck Norris Jokes

Create a Chuck Norris Project.

## Installation

Require the package using composer

```bash
pcomposer require stevepop/chuck-norris-jokes
```

## Usage

```php
use Stevepop\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)