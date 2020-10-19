## Which plugins did you use? Any special methods/functions?

- Cachebuster
- Autoresize
- Date Format
- Focus
- Iamgeradio
- Logger
- Markdown Field
- Shy

My favorite method on this project:

```php
'tagTitle' => function() {
	$title = '<span class="art">' . $this->art()->upper() . '</span>';
	if($this->more()->isNotEmpty()) $title .= ' · <span class="more">' . $this->more()->upper() . '</span>';
	$title .= ' · <span class="sprache">' . $this->sprache()->upper() . '</span>';
	return $title;
}
```

## What does your development workflow/stack look like?

- CodeKit for (S)CSS preprocessing
- Visual Studio Code
- Transmit
- Tower for Git
- aText
- Alfred
- Laravel Valet

## Credits for this project

Design: Daniel Zenker
Code: Thomas Günther

## Anything else you want to talk about?

No