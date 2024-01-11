<?php
/**
 * @package Make
 */

// Updated: 2022-09-14T10:22:47+00:00

// Bail if this isn't being included inside of MAKE_Font_Source_Google.
if ( ! isset( $this ) || ! $this instanceof MAKE_Font_Source_Google ) {
	return;
}

// Import the data.
$this->load_font_data( array(
	'ABeeZee' => array(
		'label' => 'ABeeZee',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Abel' => array(
		'label' => 'Abel',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Abhaya Libre' => array(
		'label' => 'Abhaya Libre',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'sinhala',
		),
		'category' => 'serif',
	),
	'Aboreto' => array(
		'label' => 'Aboreto',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Abril Fatface' => array(
		'label' => 'Abril Fatface',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Aclonica' => array(
		'label' => 'Aclonica',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Acme' => array(
		'label' => 'Acme',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Actor' => array(
		'label' => 'Actor',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Adamina' => array(
		'label' => 'Adamina',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Advent Pro' => array(
		'label' => 'Advent Pro',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'greek',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Aguafina Script' => array(
		'label' => 'Aguafina Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Akaya Kanadaka' => array(
		'label' => 'Akaya Kanadaka',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Akaya Telivigala' => array(
		'label' => 'Akaya Telivigala',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'telugu',
		),
		'category' => 'display',
	),
	'Akronim' => array(
		'label' => 'Akronim',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Akshar' => array(
		'label' => 'Akshar',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Aladin' => array(
		'label' => 'Aladin',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Alata' => array(
		'label' => 'Alata',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Alatsi' => array(
		'label' => 'Alatsi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Albert Sans' => array(
		'label' => 'Albert Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Aldrich' => array(
		'label' => 'Aldrich',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Alef' => array(
		'label' => 'Alef',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Alegreya' => array(
		'label' => 'Alegreya',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Alegreya SC' => array(
		'label' => 'Alegreya SC',
		'variants' => array(
			'500',
			'500italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Alegreya Sans' => array(
		'label' => 'Alegreya Sans',
		'variants' => array(
			'100',
			'100italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Alegreya Sans SC' => array(
		'label' => 'Alegreya Sans SC',
		'variants' => array(
			'100',
			'100italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Aleo' => array(
		'label' => 'Aleo',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Alex Brush' => array(
		'label' => 'Alex Brush',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Alfa Slab One' => array(
		'label' => 'Alfa Slab One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Alice' => array(
		'label' => 'Alice',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Alike' => array(
		'label' => 'Alike',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Alike Angular' => array(
		'label' => 'Alike Angular',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Allan' => array(
		'label' => 'Allan',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Allerta' => array(
		'label' => 'Allerta',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Allerta Stencil' => array(
		'label' => 'Allerta Stencil',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Allison' => array(
		'label' => 'Allison',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Allura' => array(
		'label' => 'Allura',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Almarai' => array(
		'label' => 'Almarai',
		'variants' => array(
			'300',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'arabic',
		),
		'category' => 'sans-serif',
	),
	'Almendra' => array(
		'label' => 'Almendra',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Almendra Display' => array(
		'label' => 'Almendra Display',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Almendra SC' => array(
		'label' => 'Almendra SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Alumni Sans' => array(
		'label' => 'Alumni Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Alumni Sans Collegiate One' => array(
		'label' => 'Alumni Sans Collegiate One',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Alumni Sans Inline One' => array(
		'label' => 'Alumni Sans Inline One',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Alumni Sans Pinstripe' => array(
		'label' => 'Alumni Sans Pinstripe',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Amarante' => array(
		'label' => 'Amarante',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Amaranth' => array(
		'label' => 'Amaranth',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Amatic SC' => array(
		'label' => 'Amatic SC',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Amethysta' => array(
		'label' => 'Amethysta',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Amiko' => array(
		'label' => 'Amiko',
		'variants' => array(
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Amiri' => array(
		'label' => 'Amiri',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Amiri Quran' => array(
		'label' => 'Amiri Quran',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
		),
		'category' => 'serif',
	),
	'Amita' => array(
		'label' => 'Amita',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Anaheim' => array(
		'label' => 'Anaheim',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Andada Pro' => array(
		'label' => 'Andada Pro',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Andika' => array(
		'label' => 'Andika',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Anek Bangla' => array(
		'label' => 'Anek Bangla',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Anek Devanagari' => array(
		'label' => 'Anek Devanagari',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Anek Gujarati' => array(
		'label' => 'Anek Gujarati',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Anek Gurmukhi' => array(
		'label' => 'Anek Gurmukhi',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Anek Kannada' => array(
		'label' => 'Anek Kannada',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Anek Latin' => array(
		'label' => 'Anek Latin',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Anek Malayalam' => array(
		'label' => 'Anek Malayalam',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'malayalam',
		),
		'category' => 'sans-serif',
	),
	'Anek Odia' => array(
		'label' => 'Anek Odia',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'oriya',
		),
		'category' => 'sans-serif',
	),
	'Anek Tamil' => array(
		'label' => 'Anek Tamil',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'sans-serif',
	),
	'Anek Telugu' => array(
		'label' => 'Anek Telugu',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Angkor' => array(
		'label' => 'Angkor',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Annie Use Your Telescope' => array(
		'label' => 'Annie Use Your Telescope',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Anonymous Pro' => array(
		'label' => 'Anonymous Pro',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek',
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Antic' => array(
		'label' => 'Antic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Antic Didone' => array(
		'label' => 'Antic Didone',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Antic Slab' => array(
		'label' => 'Antic Slab',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Anton' => array(
		'label' => 'Anton',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Antonio' => array(
		'label' => 'Antonio',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Anybody' => array(
		'label' => 'Anybody',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Arapey' => array(
		'label' => 'Arapey',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Arbutus' => array(
		'label' => 'Arbutus',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Arbutus Slab' => array(
		'label' => 'Arbutus Slab',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Architects Daughter' => array(
		'label' => 'Architects Daughter',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Archivo' => array(
		'label' => 'Archivo',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Archivo Black' => array(
		'label' => 'Archivo Black',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Archivo Narrow' => array(
		'label' => 'Archivo Narrow',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Are You Serious' => array(
		'label' => 'Are You Serious',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Aref Ruqaa' => array(
		'label' => 'Aref Ruqaa',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Aref Ruqaa Ink' => array(
		'label' => 'Aref Ruqaa Ink',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Arima' => array(
		'label' => 'Arima',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'malayalam',
			'tamil',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Arima Madurai' => array(
		'label' => 'Arima Madurai',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Arimo' => array(
		'label' => 'Arimo',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Arizonia' => array(
		'label' => 'Arizonia',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Armata' => array(
		'label' => 'Armata',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Arsenal' => array(
		'label' => 'Arsenal',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Artifika' => array(
		'label' => 'Artifika',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Arvo' => array(
		'label' => 'Arvo',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Arya' => array(
		'label' => 'Arya',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Asap' => array(
		'label' => 'Asap',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Asap Condensed' => array(
		'label' => 'Asap Condensed',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Asar' => array(
		'label' => 'Asar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Asset' => array(
		'label' => 'Asset',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Assistant' => array(
		'label' => 'Assistant',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Astloch' => array(
		'label' => 'Astloch',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Asul' => array(
		'label' => 'Asul',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Athiti' => array(
		'label' => 'Athiti',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Atkinson Hyperlegible' => array(
		'label' => 'Atkinson Hyperlegible',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Atma' => array(
		'label' => 'Atma',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Atomic Age' => array(
		'label' => 'Atomic Age',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Aubrey' => array(
		'label' => 'Aubrey',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Audiowide' => array(
		'label' => 'Audiowide',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Autour One' => array(
		'label' => 'Autour One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Average' => array(
		'label' => 'Average',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Average Sans' => array(
		'label' => 'Average Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Averia Gruesa Libre' => array(
		'label' => 'Averia Gruesa Libre',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Averia Libre' => array(
		'label' => 'Averia Libre',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Averia Sans Libre' => array(
		'label' => 'Averia Sans Libre',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Averia Serif Libre' => array(
		'label' => 'Averia Serif Libre',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Azeret Mono' => array(
		'label' => 'Azeret Mono',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'B612' => array(
		'label' => 'B612',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'B612 Mono' => array(
		'label' => 'B612 Mono',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'monospace',
	),
	'BIZ UDGothic' => array(
		'label' => 'BIZ UDGothic',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek-ext',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'BIZ UDMincho' => array(
		'label' => 'BIZ UDMincho',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek-ext',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'BIZ UDPGothic' => array(
		'label' => 'BIZ UDPGothic',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek-ext',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'BIZ UDPMincho' => array(
		'label' => 'BIZ UDPMincho',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek-ext',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Babylonica' => array(
		'label' => 'Babylonica',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Bad Script' => array(
		'label' => 'Bad Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Bahiana' => array(
		'label' => 'Bahiana',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Bahianita' => array(
		'label' => 'Bahianita',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bai Jamjuree' => array(
		'label' => 'Bai Jamjuree',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Bakbak One' => array(
		'label' => 'Bakbak One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Ballet' => array(
		'label' => 'Ballet',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Baloo 2' => array(
		'label' => 'Baloo 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Bhai 2' => array(
		'label' => 'Baloo Bhai 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Bhaijaan 2' => array(
		'label' => 'Baloo Bhaijaan 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Bhaina 2' => array(
		'label' => 'Baloo Bhaina 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'oriya',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Chettan 2' => array(
		'label' => 'Baloo Chettan 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'malayalam',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Da 2' => array(
		'label' => 'Baloo Da 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Paaji 2' => array(
		'label' => 'Baloo Paaji 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Tamma 2' => array(
		'label' => 'Baloo Tamma 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Tammudu 2' => array(
		'label' => 'Baloo Tammudu 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'telugu',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Baloo Thambi 2' => array(
		'label' => 'Baloo Thambi 2',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Balsamiq Sans' => array(
		'label' => 'Balsamiq Sans',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Balthazar' => array(
		'label' => 'Balthazar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Bangers' => array(
		'label' => 'Bangers',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Barlow' => array(
		'label' => 'Barlow',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Barlow Condensed' => array(
		'label' => 'Barlow Condensed',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Barlow Semi Condensed' => array(
		'label' => 'Barlow Semi Condensed',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Barriecito' => array(
		'label' => 'Barriecito',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Barrio' => array(
		'label' => 'Barrio',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Basic' => array(
		'label' => 'Basic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Baskervville' => array(
		'label' => 'Baskervville',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Battambang' => array(
		'label' => 'Battambang',
		'variants' => array(
			'100',
			'300',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Baumans' => array(
		'label' => 'Baumans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Bayon' => array(
		'label' => 'Bayon',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Be Vietnam Pro' => array(
		'label' => 'Be Vietnam Pro',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Beau Rivage' => array(
		'label' => 'Beau Rivage',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Bebas Neue' => array(
		'label' => 'Bebas Neue',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Belgrano' => array(
		'label' => 'Belgrano',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Bellefair' => array(
		'label' => 'Bellefair',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Belleza' => array(
		'label' => 'Belleza',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Bellota' => array(
		'label' => 'Bellota',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bellota Text' => array(
		'label' => 'Bellota Text',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'BenchNine' => array(
		'label' => 'BenchNine',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Benne' => array(
		'label' => 'Benne',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Bentham' => array(
		'label' => 'Bentham',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Berkshire Swash' => array(
		'label' => 'Berkshire Swash',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Besley' => array(
		'label' => 'Besley',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Beth Ellen' => array(
		'label' => 'Beth Ellen',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Bevan' => array(
		'label' => 'Bevan',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'BhuTuka Expanded One' => array(
		'label' => 'BhuTuka Expanded One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Big Shoulders Display' => array(
		'label' => 'Big Shoulders Display',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Big Shoulders Inline Display' => array(
		'label' => 'Big Shoulders Inline Display',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Big Shoulders Inline Text' => array(
		'label' => 'Big Shoulders Inline Text',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Big Shoulders Stencil Display' => array(
		'label' => 'Big Shoulders Stencil Display',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Big Shoulders Stencil Text' => array(
		'label' => 'Big Shoulders Stencil Text',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Big Shoulders Text' => array(
		'label' => 'Big Shoulders Text',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bigelow Rules' => array(
		'label' => 'Bigelow Rules',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Bigshot One' => array(
		'label' => 'Bigshot One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Bilbo' => array(
		'label' => 'Bilbo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Bilbo Swash Caps' => array(
		'label' => 'Bilbo Swash Caps',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'BioRhyme' => array(
		'label' => 'BioRhyme',
		'variants' => array(
			'200',
			'300',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'BioRhyme Expanded' => array(
		'label' => 'BioRhyme Expanded',
		'variants' => array(
			'200',
			'300',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Birthstone' => array(
		'label' => 'Birthstone',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Birthstone Bounce' => array(
		'label' => 'Birthstone Bounce',
		'variants' => array(
			'500',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Biryani' => array(
		'label' => 'Biryani',
		'variants' => array(
			'200',
			'300',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Bitter' => array(
		'label' => 'Bitter',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Black And White Picture' => array(
		'label' => 'Black And White Picture',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Black Han Sans' => array(
		'label' => 'Black Han Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Black Ops One' => array(
		'label' => 'Black Ops One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Blaka' => array(
		'label' => 'Blaka',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Blaka Hollow' => array(
		'label' => 'Blaka Hollow',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Blaka Ink' => array(
		'label' => 'Blaka Ink',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Blinker' => array(
		'label' => 'Blinker',
		'variants' => array(
			'100',
			'200',
			'300',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Bodoni Moda' => array(
		'label' => 'Bodoni Moda',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Bokor' => array(
		'label' => 'Bokor',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Bona Nova' => array(
		'label' => 'Bona Nova',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Bonbon' => array(
		'label' => 'Bonbon',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Bonheur Royale' => array(
		'label' => 'Bonheur Royale',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Boogaloo' => array(
		'label' => 'Boogaloo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Bowlby One' => array(
		'label' => 'Bowlby One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Bowlby One SC' => array(
		'label' => 'Bowlby One SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Brawler' => array(
		'label' => 'Brawler',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Bree Serif' => array(
		'label' => 'Bree Serif',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Brygada 1918' => array(
		'label' => 'Brygada 1918',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Bubblegum Sans' => array(
		'label' => 'Bubblegum Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Bubbler One' => array(
		'label' => 'Bubbler One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Buda' => array(
		'label' => 'Buda',
		'variants' => array(
			'300',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Buenard' => array(
		'label' => 'Buenard',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Bungee' => array(
		'label' => 'Bungee',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bungee Hairline' => array(
		'label' => 'Bungee Hairline',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bungee Inline' => array(
		'label' => 'Bungee Inline',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bungee Outline' => array(
		'label' => 'Bungee Outline',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bungee Shade' => array(
		'label' => 'Bungee Shade',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Bungee Spice' => array(
		'label' => 'Bungee Spice',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Butcherman' => array(
		'label' => 'Butcherman',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Butterfly Kids' => array(
		'label' => 'Butterfly Kids',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Cabin' => array(
		'label' => 'Cabin',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Cabin Condensed' => array(
		'label' => 'Cabin Condensed',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Cabin Sketch' => array(
		'label' => 'Cabin Sketch',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Caesar Dressing' => array(
		'label' => 'Caesar Dressing',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Cagliostro' => array(
		'label' => 'Cagliostro',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Cairo' => array(
		'label' => 'Cairo',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Cairo Play' => array(
		'label' => 'Cairo Play',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Caladea' => array(
		'label' => 'Caladea',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Calistoga' => array(
		'label' => 'Calistoga',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Calligraffitti' => array(
		'label' => 'Calligraffitti',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Cambay' => array(
		'label' => 'Cambay',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Cambo' => array(
		'label' => 'Cambo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Candal' => array(
		'label' => 'Candal',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Cantarell' => array(
		'label' => 'Cantarell',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Cantata One' => array(
		'label' => 'Cantata One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Cantora One' => array(
		'label' => 'Cantora One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Capriola' => array(
		'label' => 'Capriola',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Caramel' => array(
		'label' => 'Caramel',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Carattere' => array(
		'label' => 'Carattere',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Cardo' => array(
		'label' => 'Cardo',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Carme' => array(
		'label' => 'Carme',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Carrois Gothic' => array(
		'label' => 'Carrois Gothic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Carrois Gothic SC' => array(
		'label' => 'Carrois Gothic SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Carter One' => array(
		'label' => 'Carter One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Castoro' => array(
		'label' => 'Castoro',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Catamaran' => array(
		'label' => 'Catamaran',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'sans-serif',
	),
	'Caudex' => array(
		'label' => 'Caudex',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Caveat' => array(
		'label' => 'Caveat',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Caveat Brush' => array(
		'label' => 'Caveat Brush',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Cedarville Cursive' => array(
		'label' => 'Cedarville Cursive',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Ceviche One' => array(
		'label' => 'Ceviche One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Chakra Petch' => array(
		'label' => 'Chakra Petch',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Changa' => array(
		'label' => 'Changa',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Changa One' => array(
		'label' => 'Changa One',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Chango' => array(
		'label' => 'Chango',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Charis SIL' => array(
		'label' => 'Charis SIL',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Charm' => array(
		'label' => 'Charm',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Charmonman' => array(
		'label' => 'Charmonman',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Chathura' => array(
		'label' => 'Chathura',
		'variants' => array(
			'100',
			'300',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Chau Philomene One' => array(
		'label' => 'Chau Philomene One',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Chela One' => array(
		'label' => 'Chela One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Chelsea Market' => array(
		'label' => 'Chelsea Market',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Chenla' => array(
		'label' => 'Chenla',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
		),
		'category' => 'display',
	),
	'Cherish' => array(
		'label' => 'Cherish',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Cherry Cream Soda' => array(
		'label' => 'Cherry Cream Soda',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Cherry Swash' => array(
		'label' => 'Cherry Swash',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Chewy' => array(
		'label' => 'Chewy',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Chicle' => array(
		'label' => 'Chicle',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Chilanka' => array(
		'label' => 'Chilanka',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'malayalam',
		),
		'category' => 'handwriting',
	),
	'Chivo' => array(
		'label' => 'Chivo',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Chonburi' => array(
		'label' => 'Chonburi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Cinzel' => array(
		'label' => 'Cinzel',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Cinzel Decorative' => array(
		'label' => 'Cinzel Decorative',
		'variants' => array(
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Clicker Script' => array(
		'label' => 'Clicker Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Coda' => array(
		'label' => 'Coda',
		'variants' => array(
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Coda Caption' => array(
		'label' => 'Coda Caption',
		'variants' => array(
			'800',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Codystar' => array(
		'label' => 'Codystar',
		'variants' => array(
			'300',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Coiny' => array(
		'label' => 'Coiny',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Combo' => array(
		'label' => 'Combo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Comfortaa' => array(
		'label' => 'Comfortaa',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Comforter' => array(
		'label' => 'Comforter',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Comforter Brush' => array(
		'label' => 'Comforter Brush',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Comic Neue' => array(
		'label' => 'Comic Neue',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Coming Soon' => array(
		'label' => 'Coming Soon',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Commissioner' => array(
		'label' => 'Commissioner',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Concert One' => array(
		'label' => 'Concert One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Condiment' => array(
		'label' => 'Condiment',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Content' => array(
		'label' => 'Content',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'khmer',
		),
		'category' => 'display',
	),
	'Contrail One' => array(
		'label' => 'Contrail One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Convergence' => array(
		'label' => 'Convergence',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Cookie' => array(
		'label' => 'Cookie',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Copse' => array(
		'label' => 'Copse',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Corben' => array(
		'label' => 'Corben',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Corinthia' => array(
		'label' => 'Corinthia',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Cormorant' => array(
		'label' => 'Cormorant',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Cormorant Garamond' => array(
		'label' => 'Cormorant Garamond',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Cormorant Infant' => array(
		'label' => 'Cormorant Infant',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Cormorant SC' => array(
		'label' => 'Cormorant SC',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Cormorant Unicase' => array(
		'label' => 'Cormorant Unicase',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Cormorant Upright' => array(
		'label' => 'Cormorant Upright',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Courgette' => array(
		'label' => 'Courgette',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Courier Prime' => array(
		'label' => 'Courier Prime',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Cousine' => array(
		'label' => 'Cousine',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Coustard' => array(
		'label' => 'Coustard',
		'variants' => array(
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Covered By Your Grace' => array(
		'label' => 'Covered By Your Grace',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Crafty Girls' => array(
		'label' => 'Crafty Girls',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Creepster' => array(
		'label' => 'Creepster',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Crete Round' => array(
		'label' => 'Crete Round',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Crimson Pro' => array(
		'label' => 'Crimson Pro',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Crimson Text' => array(
		'label' => 'Crimson Text',
		'variants' => array(
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Croissant One' => array(
		'label' => 'Croissant One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Crushed' => array(
		'label' => 'Crushed',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Cuprum' => array(
		'label' => 'Cuprum',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Cute Font' => array(
		'label' => 'Cute Font',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'display',
	),
	'Cutive' => array(
		'label' => 'Cutive',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Cutive Mono' => array(
		'label' => 'Cutive Mono',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'DM Mono' => array(
		'label' => 'DM Mono',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'DM Sans' => array(
		'label' => 'DM Sans',
		'variants' => array(
			'500',
			'500italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'DM Serif Display' => array(
		'label' => 'DM Serif Display',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'DM Serif Text' => array(
		'label' => 'DM Serif Text',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Damion' => array(
		'label' => 'Damion',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Dancing Script' => array(
		'label' => 'Dancing Script',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Dangrek' => array(
		'label' => 'Dangrek',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Darker Grotesque' => array(
		'label' => 'Darker Grotesque',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'David Libre' => array(
		'label' => 'David Libre',
		'variants' => array(
			'500',
			'700',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Dawning of a New Day' => array(
		'label' => 'Dawning of a New Day',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Days One' => array(
		'label' => 'Days One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Dekko' => array(
		'label' => 'Dekko',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Dela Gothic One' => array(
		'label' => 'Dela Gothic One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek',
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Delius' => array(
		'label' => 'Delius',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Delius Swash Caps' => array(
		'label' => 'Delius Swash Caps',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Delius Unicase' => array(
		'label' => 'Delius Unicase',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Della Respira' => array(
		'label' => 'Della Respira',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Denk One' => array(
		'label' => 'Denk One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Devonshire' => array(
		'label' => 'Devonshire',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Dhurjati' => array(
		'label' => 'Dhurjati',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Didact Gothic' => array(
		'label' => 'Didact Gothic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Diplomata' => array(
		'label' => 'Diplomata',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Diplomata SC' => array(
		'label' => 'Diplomata SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Do Hyeon' => array(
		'label' => 'Do Hyeon',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Dokdo' => array(
		'label' => 'Dokdo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Domine' => array(
		'label' => 'Domine',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Donegal One' => array(
		'label' => 'Donegal One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Dongle' => array(
		'label' => 'Dongle',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Doppio One' => array(
		'label' => 'Doppio One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Dorsa' => array(
		'label' => 'Dorsa',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Dosis' => array(
		'label' => 'Dosis',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'DotGothic16' => array(
		'label' => 'DotGothic16',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Dr Sugiyama' => array(
		'label' => 'Dr Sugiyama',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Duru Sans' => array(
		'label' => 'Duru Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'DynaPuff' => array(
		'label' => 'DynaPuff',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Dynalight' => array(
		'label' => 'Dynalight',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'EB Garamond' => array(
		'label' => 'EB Garamond',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Eagle Lake' => array(
		'label' => 'Eagle Lake',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'East Sea Dokdo' => array(
		'label' => 'East Sea Dokdo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Eater' => array(
		'label' => 'Eater',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Economica' => array(
		'label' => 'Economica',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Eczar' => array(
		'label' => 'Eczar',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Edu NSW ACT Foundation' => array(
		'label' => 'Edu NSW ACT Foundation',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Edu QLD Beginner' => array(
		'label' => 'Edu QLD Beginner',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Edu SA Beginner' => array(
		'label' => 'Edu SA Beginner',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Edu TAS Beginner' => array(
		'label' => 'Edu TAS Beginner',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Edu VIC WA NT Beginner' => array(
		'label' => 'Edu VIC WA NT Beginner',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'El Messiri' => array(
		'label' => 'El Messiri',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Electrolize' => array(
		'label' => 'Electrolize',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Elsie' => array(
		'label' => 'Elsie',
		'variants' => array(
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Elsie Swash Caps' => array(
		'label' => 'Elsie Swash Caps',
		'variants' => array(
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Emblema One' => array(
		'label' => 'Emblema One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Emilys Candy' => array(
		'label' => 'Emilys Candy',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Encode Sans' => array(
		'label' => 'Encode Sans',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Encode Sans Condensed' => array(
		'label' => 'Encode Sans Condensed',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Encode Sans Expanded' => array(
		'label' => 'Encode Sans Expanded',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Encode Sans SC' => array(
		'label' => 'Encode Sans SC',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Encode Sans Semi Condensed' => array(
		'label' => 'Encode Sans Semi Condensed',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Encode Sans Semi Expanded' => array(
		'label' => 'Encode Sans Semi Expanded',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Engagement' => array(
		'label' => 'Engagement',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Englebert' => array(
		'label' => 'Englebert',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Enriqueta' => array(
		'label' => 'Enriqueta',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Ephesis' => array(
		'label' => 'Ephesis',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Epilogue' => array(
		'label' => 'Epilogue',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Erica One' => array(
		'label' => 'Erica One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Esteban' => array(
		'label' => 'Esteban',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Estonia' => array(
		'label' => 'Estonia',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Euphoria Script' => array(
		'label' => 'Euphoria Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Ewert' => array(
		'label' => 'Ewert',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Exo' => array(
		'label' => 'Exo',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Exo 2' => array(
		'label' => 'Exo 2',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Expletus Sans' => array(
		'label' => 'Expletus Sans',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Explora' => array(
		'label' => 'Explora',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cherokee',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Fahkwang' => array(
		'label' => 'Fahkwang',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Familjen Grotesk' => array(
		'label' => 'Familjen Grotesk',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Fanwood Text' => array(
		'label' => 'Fanwood Text',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Farro' => array(
		'label' => 'Farro',
		'variants' => array(
			'300',
			'500',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Farsan' => array(
		'label' => 'Farsan',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Fascinate' => array(
		'label' => 'Fascinate',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Fascinate Inline' => array(
		'label' => 'Fascinate Inline',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Faster One' => array(
		'label' => 'Faster One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Fasthand' => array(
		'label' => 'Fasthand',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Fauna One' => array(
		'label' => 'Fauna One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Faustina' => array(
		'label' => 'Faustina',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Federant' => array(
		'label' => 'Federant',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Federo' => array(
		'label' => 'Federo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Felipa' => array(
		'label' => 'Felipa',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Fenix' => array(
		'label' => 'Fenix',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Festive' => array(
		'label' => 'Festive',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Figtree' => array(
		'label' => 'Figtree',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Finger Paint' => array(
		'label' => 'Finger Paint',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Finlandica' => array(
		'label' => 'Finlandica',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Fira Code' => array(
		'label' => 'Fira Code',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Fira Mono' => array(
		'label' => 'Fira Mono',
		'variants' => array(
			'500',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Fira Sans' => array(
		'label' => 'Fira Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Fira Sans Condensed' => array(
		'label' => 'Fira Sans Condensed',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Fira Sans Extra Condensed' => array(
		'label' => 'Fira Sans Extra Condensed',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Fjalla One' => array(
		'label' => 'Fjalla One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Fjord One' => array(
		'label' => 'Fjord One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Flamenco' => array(
		'label' => 'Flamenco',
		'variants' => array(
			'300',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Flavors' => array(
		'label' => 'Flavors',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Fleur De Leah' => array(
		'label' => 'Fleur De Leah',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Flow Block' => array(
		'label' => 'Flow Block',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Flow Circular' => array(
		'label' => 'Flow Circular',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Flow Rounded' => array(
		'label' => 'Flow Rounded',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Fondamento' => array(
		'label' => 'Fondamento',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Fontdiner Swanky' => array(
		'label' => 'Fontdiner Swanky',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Forum' => array(
		'label' => 'Forum',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Francois One' => array(
		'label' => 'Francois One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Frank Ruhl Libre' => array(
		'label' => 'Frank Ruhl Libre',
		'variants' => array(
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Fraunces' => array(
		'label' => 'Fraunces',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Freckle Face' => array(
		'label' => 'Freckle Face',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Fredericka the Great' => array(
		'label' => 'Fredericka the Great',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Fredoka' => array(
		'label' => 'Fredoka',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Fredoka One' => array(
		'label' => 'Fredoka One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Freehand' => array(
		'label' => 'Freehand',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Fresca' => array(
		'label' => 'Fresca',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Frijole' => array(
		'label' => 'Frijole',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Fruktur' => array(
		'label' => 'Fruktur',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Fugaz One' => array(
		'label' => 'Fugaz One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Fuggles' => array(
		'label' => 'Fuggles',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Fuzzy Bubbles' => array(
		'label' => 'Fuzzy Bubbles',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'GFS Didot' => array(
		'label' => 'GFS Didot',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'greek',
		),
		'category' => 'serif',
	),
	'GFS Neohellenic' => array(
		'label' => 'GFS Neohellenic',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'greek',
		),
		'category' => 'sans-serif',
	),
	'Gabriela' => array(
		'label' => 'Gabriela',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
		),
		'category' => 'serif',
	),
	'Gaegu' => array(
		'label' => 'Gaegu',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Gafata' => array(
		'label' => 'Gafata',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Galada' => array(
		'label' => 'Galada',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
		),
		'category' => 'display',
	),
	'Galdeano' => array(
		'label' => 'Galdeano',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Galindo' => array(
		'label' => 'Galindo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Gamja Flower' => array(
		'label' => 'Gamja Flower',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Gantari' => array(
		'label' => 'Gantari',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Gayathri' => array(
		'label' => 'Gayathri',
		'variants' => array(
			'100',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'malayalam',
		),
		'category' => 'sans-serif',
	),
	'Gelasio' => array(
		'label' => 'Gelasio',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Gemunu Libre' => array(
		'label' => 'Gemunu Libre',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'sinhala',
		),
		'category' => 'sans-serif',
	),
	'Genos' => array(
		'label' => 'Genos',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cherokee',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Gentium Book Basic' => array(
		'label' => 'Gentium Book Basic',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Gentium Book Plus' => array(
		'label' => 'Gentium Book Plus',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Gentium Plus' => array(
		'label' => 'Gentium Plus',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Geo' => array(
		'label' => 'Geo',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Georama' => array(
		'label' => 'Georama',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Geostar' => array(
		'label' => 'Geostar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Geostar Fill' => array(
		'label' => 'Geostar Fill',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Germania One' => array(
		'label' => 'Germania One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Gideon Roman' => array(
		'label' => 'Gideon Roman',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Gidugu' => array(
		'label' => 'Gidugu',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Gilda Display' => array(
		'label' => 'Gilda Display',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Girassol' => array(
		'label' => 'Girassol',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Give You Glory' => array(
		'label' => 'Give You Glory',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Glass Antiqua' => array(
		'label' => 'Glass Antiqua',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Glegoo' => array(
		'label' => 'Glegoo',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Gloria Hallelujah' => array(
		'label' => 'Gloria Hallelujah',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Glory' => array(
		'label' => 'Glory',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Gluten' => array(
		'label' => 'Gluten',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Goblin One' => array(
		'label' => 'Goblin One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Gochi Hand' => array(
		'label' => 'Gochi Hand',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Goldman' => array(
		'label' => 'Goldman',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Gorditas' => array(
		'label' => 'Gorditas',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Gothic A1' => array(
		'label' => 'Gothic A1',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Gotu' => array(
		'label' => 'Gotu',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Goudy Bookletter 1911' => array(
		'label' => 'Goudy Bookletter 1911',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Gowun Batang' => array(
		'label' => 'Gowun Batang',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Gowun Dodum' => array(
		'label' => 'Gowun Dodum',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Graduate' => array(
		'label' => 'Graduate',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Grand Hotel' => array(
		'label' => 'Grand Hotel',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Grandstander' => array(
		'label' => 'Grandstander',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Grape Nuts' => array(
		'label' => 'Grape Nuts',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Gravitas One' => array(
		'label' => 'Gravitas One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Great Vibes' => array(
		'label' => 'Great Vibes',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Grechen Fuemen' => array(
		'label' => 'Grechen Fuemen',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Grenze' => array(
		'label' => 'Grenze',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Grenze Gotisch' => array(
		'label' => 'Grenze Gotisch',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Grey Qo' => array(
		'label' => 'Grey Qo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Griffy' => array(
		'label' => 'Griffy',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Gruppo' => array(
		'label' => 'Gruppo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Gudea' => array(
		'label' => 'Gudea',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Gugi' => array(
		'label' => 'Gugi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'display',
	),
	'Gulzar' => array(
		'label' => 'Gulzar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Gupter' => array(
		'label' => 'Gupter',
		'variants' => array(
			'500',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Gurajada' => array(
		'label' => 'Gurajada',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'serif',
	),
	'Gwendolyn' => array(
		'label' => 'Gwendolyn',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Habibi' => array(
		'label' => 'Habibi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Hachi Maru Pop' => array(
		'label' => 'Hachi Maru Pop',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Hahmlet' => array(
		'label' => 'Hahmlet',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Halant' => array(
		'label' => 'Halant',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Hammersmith One' => array(
		'label' => 'Hammersmith One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Hanalei' => array(
		'label' => 'Hanalei',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Hanalei Fill' => array(
		'label' => 'Hanalei Fill',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Handlee' => array(
		'label' => 'Handlee',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Hanuman' => array(
		'label' => 'Hanuman',
		'variants' => array(
			'100',
			'300',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'serif',
	),
	'Happy Monkey' => array(
		'label' => 'Happy Monkey',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Harmattan' => array(
		'label' => 'Harmattan',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Headland One' => array(
		'label' => 'Headland One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Heebo' => array(
		'label' => 'Heebo',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Henny Penny' => array(
		'label' => 'Henny Penny',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Hepta Slab' => array(
		'label' => 'Hepta Slab',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Herr Von Muellerhoff' => array(
		'label' => 'Herr Von Muellerhoff',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Hi Melody' => array(
		'label' => 'Hi Melody',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Hina Mincho' => array(
		'label' => 'Hina Mincho',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Hind' => array(
		'label' => 'Hind',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Hind Guntur' => array(
		'label' => 'Hind Guntur',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Hind Madurai' => array(
		'label' => 'Hind Madurai',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'sans-serif',
	),
	'Hind Siliguri' => array(
		'label' => 'Hind Siliguri',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Hind Vadodara' => array(
		'label' => 'Hind Vadodara',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Holtwood One SC' => array(
		'label' => 'Holtwood One SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Homemade Apple' => array(
		'label' => 'Homemade Apple',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Homenaje' => array(
		'label' => 'Homenaje',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Hubballi' => array(
		'label' => 'Hubballi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Hurricane' => array(
		'label' => 'Hurricane',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'IBM Plex Mono' => array(
		'label' => 'IBM Plex Mono',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'IBM Plex Sans' => array(
		'label' => 'IBM Plex Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Sans Arabic' => array(
		'label' => 'IBM Plex Sans Arabic',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Sans Condensed' => array(
		'label' => 'IBM Plex Sans Condensed',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Sans Devanagari' => array(
		'label' => 'IBM Plex Sans Devanagari',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Sans Hebrew' => array(
		'label' => 'IBM Plex Sans Hebrew',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Sans KR' => array(
		'label' => 'IBM Plex Sans KR',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Sans Thai' => array(
		'label' => 'IBM Plex Sans Thai',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'thai',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Sans Thai Looped' => array(
		'label' => 'IBM Plex Sans Thai Looped',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'thai',
		),
		'category' => 'sans-serif',
	),
	'IBM Plex Serif' => array(
		'label' => 'IBM Plex Serif',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'IM Fell DW Pica' => array(
		'label' => 'IM Fell DW Pica',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell DW Pica SC' => array(
		'label' => 'IM Fell DW Pica SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell Double Pica' => array(
		'label' => 'IM Fell Double Pica',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell Double Pica SC' => array(
		'label' => 'IM Fell Double Pica SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell English' => array(
		'label' => 'IM Fell English',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell English SC' => array(
		'label' => 'IM Fell English SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell French Canon' => array(
		'label' => 'IM Fell French Canon',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell French Canon SC' => array(
		'label' => 'IM Fell French Canon SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell Great Primer' => array(
		'label' => 'IM Fell Great Primer',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'IM Fell Great Primer SC' => array(
		'label' => 'IM Fell Great Primer SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Ibarra Real Nova' => array(
		'label' => 'Ibarra Real Nova',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Iceberg' => array(
		'label' => 'Iceberg',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Iceland' => array(
		'label' => 'Iceland',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Imbue' => array(
		'label' => 'Imbue',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Imperial Script' => array(
		'label' => 'Imperial Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Imprima' => array(
		'label' => 'Imprima',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Inconsolata' => array(
		'label' => 'Inconsolata',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Inder' => array(
		'label' => 'Inder',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Indie Flower' => array(
		'label' => 'Indie Flower',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Ingrid Darling' => array(
		'label' => 'Ingrid Darling',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Inika' => array(
		'label' => 'Inika',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Inknut Antiqua' => array(
		'label' => 'Inknut Antiqua',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Inria Sans' => array(
		'label' => 'Inria Sans',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Inria Serif' => array(
		'label' => 'Inria Serif',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Inspiration' => array(
		'label' => 'Inspiration',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Inter' => array(
		'label' => 'Inter',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Irish Grover' => array(
		'label' => 'Irish Grover',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Island Moments' => array(
		'label' => 'Island Moments',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Istok Web' => array(
		'label' => 'Istok Web',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Italiana' => array(
		'label' => 'Italiana',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Italianno' => array(
		'label' => 'Italianno',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Itim' => array(
		'label' => 'Itim',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Jacques Francois' => array(
		'label' => 'Jacques Francois',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Jacques Francois Shadow' => array(
		'label' => 'Jacques Francois Shadow',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Jaldi' => array(
		'label' => 'Jaldi',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'JetBrains Mono' => array(
		'label' => 'JetBrains Mono',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Jim Nightshade' => array(
		'label' => 'Jim Nightshade',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Joan' => array(
		'label' => 'Joan',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Jockey One' => array(
		'label' => 'Jockey One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Jolly Lodger' => array(
		'label' => 'Jolly Lodger',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Jomhuria' => array(
		'label' => 'Jomhuria',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Jomolhari' => array(
		'label' => 'Jomolhari',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'tibetan',
		),
		'category' => 'serif',
	),
	'Josefin Sans' => array(
		'label' => 'Josefin Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Josefin Slab' => array(
		'label' => 'Josefin Slab',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Jost' => array(
		'label' => 'Jost',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Joti One' => array(
		'label' => 'Joti One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Jua' => array(
		'label' => 'Jua',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Judson' => array(
		'label' => 'Judson',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Julee' => array(
		'label' => 'Julee',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Julius Sans One' => array(
		'label' => 'Julius Sans One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Junge' => array(
		'label' => 'Junge',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Jura' => array(
		'label' => 'Jura',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'kayah-li',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Just Another Hand' => array(
		'label' => 'Just Another Hand',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Just Me Again Down Here' => array(
		'label' => 'Just Me Again Down Here',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'K2D' => array(
		'label' => 'K2D',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Kadwa' => array(
		'label' => 'Kadwa',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
		),
		'category' => 'serif',
	),
	'Kaisei Decol' => array(
		'label' => 'Kaisei Decol',
		'variants' => array(
			'500',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Kaisei HarunoUmi' => array(
		'label' => 'Kaisei HarunoUmi',
		'variants' => array(
			'500',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Kaisei Opti' => array(
		'label' => 'Kaisei Opti',
		'variants' => array(
			'500',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Kaisei Tokumin' => array(
		'label' => 'Kaisei Tokumin',
		'variants' => array(
			'500',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Kalam' => array(
		'label' => 'Kalam',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Kameron' => array(
		'label' => 'Kameron',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Kanit' => array(
		'label' => 'Kanit',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Kantumruy' => array(
		'label' => 'Kantumruy',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'khmer',
		),
		'category' => 'sans-serif',
	),
	'Kantumruy Pro' => array(
		'label' => 'Kantumruy Pro',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Karantina' => array(
		'label' => 'Karantina',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Karla' => array(
		'label' => 'Karla',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Karma' => array(
		'label' => 'Karma',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Katibeh' => array(
		'label' => 'Katibeh',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Kaushan Script' => array(
		'label' => 'Kaushan Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Kavivanar' => array(
		'label' => 'Kavivanar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'handwriting',
	),
	'Kavoon' => array(
		'label' => 'Kavoon',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Kdam Thmor Pro' => array(
		'label' => 'Kdam Thmor Pro',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Keania One' => array(
		'label' => 'Keania One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Kelly Slab' => array(
		'label' => 'Kelly Slab',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Kenia' => array(
		'label' => 'Kenia',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Khand' => array(
		'label' => 'Khand',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Khmer' => array(
		'label' => 'Khmer',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
		),
		'category' => 'display',
	),
	'Khula' => array(
		'label' => 'Khula',
		'variants' => array(
			'300',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Kings' => array(
		'label' => 'Kings',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Kirang Haerang' => array(
		'label' => 'Kirang Haerang',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'display',
	),
	'Kite One' => array(
		'label' => 'Kite One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Kiwi Maru' => array(
		'label' => 'Kiwi Maru',
		'variants' => array(
			'300',
			'500',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Klee One' => array(
		'label' => 'Klee One',
		'variants' => array(
			'600',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek-ext',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Knewave' => array(
		'label' => 'Knewave',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'KoHo' => array(
		'label' => 'KoHo',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Kodchasan' => array(
		'label' => 'Kodchasan',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Koh Santepheap' => array(
		'label' => 'Koh Santepheap',
		'variants' => array(
			'100',
			'300',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Kolker Brush' => array(
		'label' => 'Kolker Brush',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Kosugi' => array(
		'label' => 'Kosugi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Kosugi Maru' => array(
		'label' => 'Kosugi Maru',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Kotta One' => array(
		'label' => 'Kotta One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Koulen' => array(
		'label' => 'Koulen',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Kranky' => array(
		'label' => 'Kranky',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Kreon' => array(
		'label' => 'Kreon',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Kristi' => array(
		'label' => 'Kristi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Krona One' => array(
		'label' => 'Krona One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Krub' => array(
		'label' => 'Krub',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Kufam' => array(
		'label' => 'Kufam',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Kulim Park' => array(
		'label' => 'Kulim Park',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Kumar One' => array(
		'label' => 'Kumar One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Kumar One Outline' => array(
		'label' => 'Kumar One Outline',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Kumbh Sans' => array(
		'label' => 'Kumbh Sans',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Kurale' => array(
		'label' => 'Kurale',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'La Belle Aurore' => array(
		'label' => 'La Belle Aurore',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Lacquer' => array(
		'label' => 'Lacquer',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Laila' => array(
		'label' => 'Laila',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Lakki Reddy' => array(
		'label' => 'Lakki Reddy',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'handwriting',
	),
	'Lalezar' => array(
		'label' => 'Lalezar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Lancelot' => array(
		'label' => 'Lancelot',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Langar' => array(
		'label' => 'Langar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Lateef' => array(
		'label' => 'Lateef',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Lato' => array(
		'label' => 'Lato',
		'variants' => array(
			'100',
			'100italic',
			'300',
			'300italic',
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Lavishly Yours' => array(
		'label' => 'Lavishly Yours',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'League Gothic' => array(
		'label' => 'League Gothic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'League Script' => array(
		'label' => 'League Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'League Spartan' => array(
		'label' => 'League Spartan',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Leckerli One' => array(
		'label' => 'Leckerli One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Ledger' => array(
		'label' => 'Ledger',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Lekton' => array(
		'label' => 'Lekton',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Lemon' => array(
		'label' => 'Lemon',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Lemonada' => array(
		'label' => 'Lemonada',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Lexend' => array(
		'label' => 'Lexend',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lexend Deca' => array(
		'label' => 'Lexend Deca',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lexend Exa' => array(
		'label' => 'Lexend Exa',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lexend Giga' => array(
		'label' => 'Lexend Giga',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lexend Mega' => array(
		'label' => 'Lexend Mega',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lexend Peta' => array(
		'label' => 'Lexend Peta',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lexend Tera' => array(
		'label' => 'Lexend Tera',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lexend Zetta' => array(
		'label' => 'Lexend Zetta',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Libre Barcode 128' => array(
		'label' => 'Libre Barcode 128',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Libre Barcode 128 Text' => array(
		'label' => 'Libre Barcode 128 Text',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Libre Barcode 39' => array(
		'label' => 'Libre Barcode 39',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Libre Barcode 39 Extended' => array(
		'label' => 'Libre Barcode 39 Extended',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Libre Barcode 39 Extended Text' => array(
		'label' => 'Libre Barcode 39 Extended Text',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Libre Barcode 39 Text' => array(
		'label' => 'Libre Barcode 39 Text',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Libre Barcode EAN13 Text' => array(
		'label' => 'Libre Barcode EAN13 Text',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Libre Baskerville' => array(
		'label' => 'Libre Baskerville',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Libre Bodoni' => array(
		'label' => 'Libre Bodoni',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Libre Caslon Display' => array(
		'label' => 'Libre Caslon Display',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Libre Caslon Text' => array(
		'label' => 'Libre Caslon Text',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Libre Franklin' => array(
		'label' => 'Libre Franklin',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Licorice' => array(
		'label' => 'Licorice',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Life Savers' => array(
		'label' => 'Life Savers',
		'variants' => array(
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Lilita One' => array(
		'label' => 'Lilita One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Lily Script One' => array(
		'label' => 'Lily Script One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Limelight' => array(
		'label' => 'Limelight',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Linden Hill' => array(
		'label' => 'Linden Hill',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Literata' => array(
		'label' => 'Literata',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Liu Jian Mao Cao' => array(
		'label' => 'Liu Jian Mao Cao',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Livvic' => array(
		'label' => 'Livvic',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Lobster' => array(
		'label' => 'Lobster',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Lobster Two' => array(
		'label' => 'Lobster Two',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Londrina Outline' => array(
		'label' => 'Londrina Outline',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Londrina Shadow' => array(
		'label' => 'Londrina Shadow',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Londrina Sketch' => array(
		'label' => 'Londrina Sketch',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Londrina Solid' => array(
		'label' => 'Londrina Solid',
		'variants' => array(
			'100',
			'300',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Long Cang' => array(
		'label' => 'Long Cang',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Lora' => array(
		'label' => 'Lora',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Love Light' => array(
		'label' => 'Love Light',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Love Ya Like A Sister' => array(
		'label' => 'Love Ya Like A Sister',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Loved by the King' => array(
		'label' => 'Loved by the King',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Lovers Quarrel' => array(
		'label' => 'Lovers Quarrel',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Luckiest Guy' => array(
		'label' => 'Luckiest Guy',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Lusitana' => array(
		'label' => 'Lusitana',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Lustria' => array(
		'label' => 'Lustria',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Luxurious Roman' => array(
		'label' => 'Luxurious Roman',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Luxurious Script' => array(
		'label' => 'Luxurious Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'M PLUS 1' => array(
		'label' => 'M PLUS 1',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'M PLUS 1 Code' => array(
		'label' => 'M PLUS 1 Code',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'M PLUS 1p' => array(
		'label' => 'M PLUS 1p',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'hebrew',
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'M PLUS 2' => array(
		'label' => 'M PLUS 2',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'M PLUS Code Latin' => array(
		'label' => 'M PLUS Code Latin',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'M PLUS Rounded 1c' => array(
		'label' => 'M PLUS Rounded 1c',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'hebrew',
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Ma Shan Zheng' => array(
		'label' => 'Ma Shan Zheng',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Macondo' => array(
		'label' => 'Macondo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Macondo Swash Caps' => array(
		'label' => 'Macondo Swash Caps',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Mada' => array(
		'label' => 'Mada',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Magra' => array(
		'label' => 'Magra',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Maiden Orange' => array(
		'label' => 'Maiden Orange',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Maitree' => array(
		'label' => 'Maitree',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Major Mono Display' => array(
		'label' => 'Major Mono Display',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Mako' => array(
		'label' => 'Mako',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Mali' => array(
		'label' => 'Mali',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Mallanna' => array(
		'label' => 'Mallanna',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Mandali' => array(
		'label' => 'Mandali',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Manjari' => array(
		'label' => 'Manjari',
		'variants' => array(
			'100',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'malayalam',
		),
		'category' => 'sans-serif',
	),
	'Manrope' => array(
		'label' => 'Manrope',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Mansalva' => array(
		'label' => 'Mansalva',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Manuale' => array(
		'label' => 'Manuale',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Marcellus' => array(
		'label' => 'Marcellus',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Marcellus SC' => array(
		'label' => 'Marcellus SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Marck Script' => array(
		'label' => 'Marck Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Margarine' => array(
		'label' => 'Margarine',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Markazi Text' => array(
		'label' => 'Markazi Text',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Marko One' => array(
		'label' => 'Marko One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Marmelad' => array(
		'label' => 'Marmelad',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Martel' => array(
		'label' => 'Martel',
		'variants' => array(
			'200',
			'300',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Martel Sans' => array(
		'label' => 'Martel Sans',
		'variants' => array(
			'200',
			'300',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Marvel' => array(
		'label' => 'Marvel',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Mate' => array(
		'label' => 'Mate',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Mate SC' => array(
		'label' => 'Mate SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Maven Pro' => array(
		'label' => 'Maven Pro',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'McLaren' => array(
		'label' => 'McLaren',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Mea Culpa' => array(
		'label' => 'Mea Culpa',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Meddon' => array(
		'label' => 'Meddon',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'MedievalSharp' => array(
		'label' => 'MedievalSharp',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Medula One' => array(
		'label' => 'Medula One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Meera Inimai' => array(
		'label' => 'Meera Inimai',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'tamil',
		),
		'category' => 'sans-serif',
	),
	'Megrim' => array(
		'label' => 'Megrim',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Meie Script' => array(
		'label' => 'Meie Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Meow Script' => array(
		'label' => 'Meow Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Merienda' => array(
		'label' => 'Merienda',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Merienda One' => array(
		'label' => 'Merienda One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Merriweather' => array(
		'label' => 'Merriweather',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Merriweather Sans' => array(
		'label' => 'Merriweather Sans',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Metal' => array(
		'label' => 'Metal',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Metal Mania' => array(
		'label' => 'Metal Mania',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Metamorphous' => array(
		'label' => 'Metamorphous',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Metrophobic' => array(
		'label' => 'Metrophobic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Michroma' => array(
		'label' => 'Michroma',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Milonga' => array(
		'label' => 'Milonga',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Miltonian' => array(
		'label' => 'Miltonian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Miltonian Tattoo' => array(
		'label' => 'Miltonian Tattoo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Mina' => array(
		'label' => 'Mina',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Mingzat' => array(
		'label' => 'Mingzat',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'lepcha',
		),
		'category' => 'sans-serif',
	),
	'Miniver' => array(
		'label' => 'Miniver',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Miriam Libre' => array(
		'label' => 'Miriam Libre',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Mirza' => array(
		'label' => 'Mirza',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Miss Fajardose' => array(
		'label' => 'Miss Fajardose',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Mitr' => array(
		'label' => 'Mitr',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Mochiy Pop One' => array(
		'label' => 'Mochiy Pop One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Mochiy Pop P One' => array(
		'label' => 'Mochiy Pop P One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Modak' => array(
		'label' => 'Modak',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Modern Antiqua' => array(
		'label' => 'Modern Antiqua',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Mogra' => array(
		'label' => 'Mogra',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Mohave' => array(
		'label' => 'Mohave',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Molengo' => array(
		'label' => 'Molengo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Molle' => array(
		'label' => 'Molle',
		'variants' => array(
			'italic',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Monda' => array(
		'label' => 'Monda',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Monofett' => array(
		'label' => 'Monofett',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Monoton' => array(
		'label' => 'Monoton',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Monsieur La Doulaise' => array(
		'label' => 'Monsieur La Doulaise',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Montaga' => array(
		'label' => 'Montaga',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Montagu Slab' => array(
		'label' => 'Montagu Slab',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'MonteCarlo' => array(
		'label' => 'MonteCarlo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Montez' => array(
		'label' => 'Montez',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Montserrat' => array(
		'label' => 'Montserrat',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Montserrat Alternates' => array(
		'label' => 'Montserrat Alternates',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Montserrat Subrayada' => array(
		'label' => 'Montserrat Subrayada',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Moo Lah Lah' => array(
		'label' => 'Moo Lah Lah',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Moon Dance' => array(
		'label' => 'Moon Dance',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Moul' => array(
		'label' => 'Moul',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Moulpali' => array(
		'label' => 'Moulpali',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Mountains of Christmas' => array(
		'label' => 'Mountains of Christmas',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Mouse Memoirs' => array(
		'label' => 'Mouse Memoirs',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Mr Bedfort' => array(
		'label' => 'Mr Bedfort',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Mr Dafoe' => array(
		'label' => 'Mr Dafoe',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Mr De Haviland' => array(
		'label' => 'Mr De Haviland',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Mrs Saint Delafield' => array(
		'label' => 'Mrs Saint Delafield',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Mrs Sheppards' => array(
		'label' => 'Mrs Sheppards',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Ms Madi' => array(
		'label' => 'Ms Madi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Mukta' => array(
		'label' => 'Mukta',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Mukta Mahee' => array(
		'label' => 'Mukta Mahee',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Mukta Malar' => array(
		'label' => 'Mukta Malar',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'sans-serif',
	),
	'Mukta Vaani' => array(
		'label' => 'Mukta Vaani',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Mulish' => array(
		'label' => 'Mulish',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Murecho' => array(
		'label' => 'Murecho',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'MuseoModerno' => array(
		'label' => 'MuseoModerno',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'My Soul' => array(
		'label' => 'My Soul',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Mystery Quest' => array(
		'label' => 'Mystery Quest',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'NTR' => array(
		'label' => 'NTR',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Nabla' => array(
		'label' => 'Nabla',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'math',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Nanum Brush Script' => array(
		'label' => 'Nanum Brush Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Nanum Gothic' => array(
		'label' => 'Nanum Gothic',
		'variants' => array(
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Nanum Gothic Coding' => array(
		'label' => 'Nanum Gothic Coding',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'monospace',
	),
	'Nanum Myeongjo' => array(
		'label' => 'Nanum Myeongjo',
		'variants' => array(
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'serif',
	),
	'Nanum Pen Script' => array(
		'label' => 'Nanum Pen Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Neonderthaw' => array(
		'label' => 'Neonderthaw',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Nerko One' => array(
		'label' => 'Nerko One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Neucha' => array(
		'label' => 'Neucha',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Neuton' => array(
		'label' => 'Neuton',
		'variants' => array(
			'200',
			'300',
			'700',
			'800',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'New Rocker' => array(
		'label' => 'New Rocker',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'New Tegomin' => array(
		'label' => 'New Tegomin',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'News Cycle' => array(
		'label' => 'News Cycle',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Newsreader' => array(
		'label' => 'Newsreader',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Niconne' => array(
		'label' => 'Niconne',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Niramit' => array(
		'label' => 'Niramit',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Nixie One' => array(
		'label' => 'Nixie One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Nobile' => array(
		'label' => 'Nobile',
		'variants' => array(
			'500',
			'500italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Nokora' => array(
		'label' => 'Nokora',
		'variants' => array(
			'100',
			'300',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Norican' => array(
		'label' => 'Norican',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Nosifer' => array(
		'label' => 'Nosifer',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Notable' => array(
		'label' => 'Notable',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Nothing You Could Do' => array(
		'label' => 'Nothing You Could Do',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Noticia Text' => array(
		'label' => 'Noticia Text',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Noto Color Emoji' => array(
		'label' => 'Noto Color Emoji',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'emoji',
		),
		'category' => 'sans-serif',
	),
	'Noto Emoji' => array(
		'label' => 'Noto Emoji',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'emoji',
		),
		'category' => 'sans-serif',
	),
	'Noto Kufi Arabic' => array(
		'label' => 'Noto Kufi Arabic',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'arabic',
		),
		'category' => 'sans-serif',
	),
	'Noto Music' => array(
		'label' => 'Noto Music',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'music',
		),
		'category' => 'sans-serif',
	),
	'Noto Naskh Arabic' => array(
		'label' => 'Noto Naskh Arabic',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
		),
		'category' => 'serif',
	),
	'Noto Nastaliq Urdu' => array(
		'label' => 'Noto Nastaliq Urdu',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
		),
		'category' => 'serif',
	),
	'Noto Rashi Hebrew' => array(
		'label' => 'Noto Rashi Hebrew',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Sans' => array(
		'label' => 'Noto Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'devanagari',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Adlam' => array(
		'label' => 'Noto Sans Adlam',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'adlam',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Adlam Unjoined' => array(
		'label' => 'Noto Sans Adlam Unjoined',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'adlam',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Anatolian Hieroglyphs' => array(
		'label' => 'Noto Sans Anatolian Hieroglyphs',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'anatolian-hieroglyphs',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Arabic' => array(
		'label' => 'Noto Sans Arabic',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'arabic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Armenian' => array(
		'label' => 'Noto Sans Armenian',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'armenian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Avestan' => array(
		'label' => 'Noto Sans Avestan',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'avestan',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Balinese' => array(
		'label' => 'Noto Sans Balinese',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'balinese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Bamum' => array(
		'label' => 'Noto Sans Bamum',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'bamum',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Bassa Vah' => array(
		'label' => 'Noto Sans Bassa Vah',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'bassa-vah',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Batak' => array(
		'label' => 'Noto Sans Batak',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'batak',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Bengali' => array(
		'label' => 'Noto Sans Bengali',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Bhaiksuki' => array(
		'label' => 'Noto Sans Bhaiksuki',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'bhaiksuki',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Brahmi' => array(
		'label' => 'Noto Sans Brahmi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'brahmi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Buginese' => array(
		'label' => 'Noto Sans Buginese',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'buginese',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Buhid' => array(
		'label' => 'Noto Sans Buhid',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'buhid',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Canadian Aboriginal' => array(
		'label' => 'Noto Sans Canadian Aboriginal',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'canadian-aboriginal',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Carian' => array(
		'label' => 'Noto Sans Carian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'carian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Caucasian Albanian' => array(
		'label' => 'Noto Sans Caucasian Albanian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'caucasian-albanian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Chakma' => array(
		'label' => 'Noto Sans Chakma',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chakma',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Cham' => array(
		'label' => 'Noto Sans Cham',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cham',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Cherokee' => array(
		'label' => 'Noto Sans Cherokee',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cherokee',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Coptic' => array(
		'label' => 'Noto Sans Coptic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'coptic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Cuneiform' => array(
		'label' => 'Noto Sans Cuneiform',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cuneiform',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Cypriot' => array(
		'label' => 'Noto Sans Cypriot',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cypriot',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Deseret' => array(
		'label' => 'Noto Sans Deseret',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'deseret',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Devanagari' => array(
		'label' => 'Noto Sans Devanagari',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Display' => array(
		'label' => 'Noto Sans Display',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Duployan' => array(
		'label' => 'Noto Sans Duployan',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'duployan',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Egyptian Hieroglyphs' => array(
		'label' => 'Noto Sans Egyptian Hieroglyphs',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'egyptian-hieroglyphs',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Elbasan' => array(
		'label' => 'Noto Sans Elbasan',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'elbasan',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Elymaic' => array(
		'label' => 'Noto Sans Elymaic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'elymaic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Georgian' => array(
		'label' => 'Noto Sans Georgian',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'georgian',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Glagolitic' => array(
		'label' => 'Noto Sans Glagolitic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'glagolitic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Gothic' => array(
		'label' => 'Noto Sans Gothic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gothic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Grantha' => array(
		'label' => 'Noto Sans Grantha',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'grantha',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Gujarati' => array(
		'label' => 'Noto Sans Gujarati',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Gunjala Gondi' => array(
		'label' => 'Noto Sans Gunjala Gondi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gunjala-gondi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Gurmukhi' => array(
		'label' => 'Noto Sans Gurmukhi',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans HK' => array(
		'label' => 'Noto Sans HK',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'chinese-hongkong',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Hanifi Rohingya' => array(
		'label' => 'Noto Sans Hanifi Rohingya',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'hanifi-rohingya',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Hanunoo' => array(
		'label' => 'Noto Sans Hanunoo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'hanunoo',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Hatran' => array(
		'label' => 'Noto Sans Hatran',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'hatran',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Hebrew' => array(
		'label' => 'Noto Sans Hebrew',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Imperial Aramaic' => array(
		'label' => 'Noto Sans Imperial Aramaic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'imperial-aramaic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Indic Siyaq Numbers' => array(
		'label' => 'Noto Sans Indic Siyaq Numbers',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'indic-siyaq-numbers',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Inscriptional Pahlavi' => array(
		'label' => 'Noto Sans Inscriptional Pahlavi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'inscriptional-pahlavi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Inscriptional Parthian' => array(
		'label' => 'Noto Sans Inscriptional Parthian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'inscriptional-parthian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans JP' => array(
		'label' => 'Noto Sans JP',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Javanese' => array(
		'label' => 'Noto Sans Javanese',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'javanese',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans KR' => array(
		'label' => 'Noto Sans KR',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Kaithi' => array(
		'label' => 'Noto Sans Kaithi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'kaithi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Kannada' => array(
		'label' => 'Noto Sans Kannada',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Kayah Li' => array(
		'label' => 'Noto Sans Kayah Li',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'kayah-li',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Kharoshthi' => array(
		'label' => 'Noto Sans Kharoshthi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'kharoshthi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Khmer' => array(
		'label' => 'Noto Sans Khmer',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Khojki' => array(
		'label' => 'Noto Sans Khojki',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khojki',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Khudawadi' => array(
		'label' => 'Noto Sans Khudawadi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khudawadi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Lao' => array(
		'label' => 'Noto Sans Lao',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'lao',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Lepcha' => array(
		'label' => 'Noto Sans Lepcha',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'lepcha',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Limbu' => array(
		'label' => 'Noto Sans Limbu',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'limbu',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Linear A' => array(
		'label' => 'Noto Sans Linear A',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'linear-a',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Linear B' => array(
		'label' => 'Noto Sans Linear B',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'linear-b',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Lisu' => array(
		'label' => 'Noto Sans Lisu',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'lisu',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Lycian' => array(
		'label' => 'Noto Sans Lycian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'lycian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Lydian' => array(
		'label' => 'Noto Sans Lydian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'lydian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Mahajani' => array(
		'label' => 'Noto Sans Mahajani',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'mahajani',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Malayalam' => array(
		'label' => 'Noto Sans Malayalam',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'malayalam',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Mandaic' => array(
		'label' => 'Noto Sans Mandaic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'mandaic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Manichaean' => array(
		'label' => 'Noto Sans Manichaean',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'manichaean',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Marchen' => array(
		'label' => 'Noto Sans Marchen',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'marchen',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Masaram Gondi' => array(
		'label' => 'Noto Sans Masaram Gondi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'masaram-gondi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Math' => array(
		'label' => 'Noto Sans Math',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'math',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Mayan Numerals' => array(
		'label' => 'Noto Sans Mayan Numerals',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'mayan-numerals',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Medefaidrin' => array(
		'label' => 'Noto Sans Medefaidrin',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'medefaidrin',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Meetei Mayek' => array(
		'label' => 'Noto Sans Meetei Mayek',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'meetei-mayek',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Meroitic' => array(
		'label' => 'Noto Sans Meroitic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'meroitic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Miao' => array(
		'label' => 'Noto Sans Miao',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'miao',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Modi' => array(
		'label' => 'Noto Sans Modi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'modi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Mongolian' => array(
		'label' => 'Noto Sans Mongolian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'mongolian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Mono' => array(
		'label' => 'Noto Sans Mono',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Noto Sans Mro' => array(
		'label' => 'Noto Sans Mro',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'mro',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Multani' => array(
		'label' => 'Noto Sans Multani',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'multani',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Myanmar' => array(
		'label' => 'Noto Sans Myanmar',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'myanmar',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans N Ko' => array(
		'label' => 'Noto Sans N Ko',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'nko',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Nabataean' => array(
		'label' => 'Noto Sans Nabataean',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'nabataean',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans New Tai Lue' => array(
		'label' => 'Noto Sans New Tai Lue',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'new-tai-lue',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Newa' => array(
		'label' => 'Noto Sans Newa',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'newa',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Nushu' => array(
		'label' => 'Noto Sans Nushu',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'nushu',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Ogham' => array(
		'label' => 'Noto Sans Ogham',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'ogham',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Ol Chiki' => array(
		'label' => 'Noto Sans Ol Chiki',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'ol-chiki',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old Hungarian' => array(
		'label' => 'Noto Sans Old Hungarian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-hungarian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old Italic' => array(
		'label' => 'Noto Sans Old Italic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-italic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old North Arabian' => array(
		'label' => 'Noto Sans Old North Arabian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-north-arabian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old Permic' => array(
		'label' => 'Noto Sans Old Permic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-permic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old Persian' => array(
		'label' => 'Noto Sans Old Persian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-persian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old Sogdian' => array(
		'label' => 'Noto Sans Old Sogdian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-sogdian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old South Arabian' => array(
		'label' => 'Noto Sans Old South Arabian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-south-arabian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Old Turkic' => array(
		'label' => 'Noto Sans Old Turkic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'old-turkic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Oriya' => array(
		'label' => 'Noto Sans Oriya',
		'variants' => array(
			'100',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'oriya',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Osage' => array(
		'label' => 'Noto Sans Osage',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'osage',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Osmanya' => array(
		'label' => 'Noto Sans Osmanya',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'osmanya',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Pahawh Hmong' => array(
		'label' => 'Noto Sans Pahawh Hmong',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'pahawh-hmong',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Palmyrene' => array(
		'label' => 'Noto Sans Palmyrene',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'palmyrene',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Pau Cin Hau' => array(
		'label' => 'Noto Sans Pau Cin Hau',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'pau-cin-hau',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Phags Pa' => array(
		'label' => 'Noto Sans Phags Pa',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'phags-pa',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Phoenician' => array(
		'label' => 'Noto Sans Phoenician',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'phoenician',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Psalter Pahlavi' => array(
		'label' => 'Noto Sans Psalter Pahlavi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'psalter-pahlavi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Rejang' => array(
		'label' => 'Noto Sans Rejang',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'rejang',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Runic' => array(
		'label' => 'Noto Sans Runic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'runic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans SC' => array(
		'label' => 'Noto Sans SC',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Samaritan' => array(
		'label' => 'Noto Sans Samaritan',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'samaritan',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Saurashtra' => array(
		'label' => 'Noto Sans Saurashtra',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'saurashtra',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Sharada' => array(
		'label' => 'Noto Sans Sharada',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'sharada',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Shavian' => array(
		'label' => 'Noto Sans Shavian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'shavian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Siddham' => array(
		'label' => 'Noto Sans Siddham',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'siddham',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Sinhala' => array(
		'label' => 'Noto Sans Sinhala',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'sinhala',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Sogdian' => array(
		'label' => 'Noto Sans Sogdian',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'sogdian',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Sora Sompeng' => array(
		'label' => 'Noto Sans Sora Sompeng',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'sora-sompeng',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Soyombo' => array(
		'label' => 'Noto Sans Soyombo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'soyombo',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Sundanese' => array(
		'label' => 'Noto Sans Sundanese',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'sundanese',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Syloti Nagri' => array(
		'label' => 'Noto Sans Syloti Nagri',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'syloti-nagri',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Symbols' => array(
		'label' => 'Noto Sans Symbols',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'symbols',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Symbols 2' => array(
		'label' => 'Noto Sans Symbols 2',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'symbols',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Syriac' => array(
		'label' => 'Noto Sans Syriac',
		'variants' => array(
			'100',
			'900',
			'regular',
		),
		'subsets' => array(
			'syriac',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans TC' => array(
		'label' => 'Noto Sans TC',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'chinese-traditional',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tagalog' => array(
		'label' => 'Noto Sans Tagalog',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tagalog',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tagbanwa' => array(
		'label' => 'Noto Sans Tagbanwa',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tagbanwa',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tai Le' => array(
		'label' => 'Noto Sans Tai Le',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tai-le',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tai Tham' => array(
		'label' => 'Noto Sans Tai Tham',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'tai-tham',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tai Viet' => array(
		'label' => 'Noto Sans Tai Viet',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tai-viet',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Takri' => array(
		'label' => 'Noto Sans Takri',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'takri',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tamil' => array(
		'label' => 'Noto Sans Tamil',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tamil Supplement' => array(
		'label' => 'Noto Sans Tamil Supplement',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tamil-supplement',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Telugu' => array(
		'label' => 'Noto Sans Telugu',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Thaana' => array(
		'label' => 'Noto Sans Thaana',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'thaana',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Thai' => array(
		'label' => 'Noto Sans Thai',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Thai Looped' => array(
		'label' => 'Noto Sans Thai Looped',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'thai',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tifinagh' => array(
		'label' => 'Noto Sans Tifinagh',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tifinagh',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Tirhuta' => array(
		'label' => 'Noto Sans Tirhuta',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tirhuta',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Ugaritic' => array(
		'label' => 'Noto Sans Ugaritic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'ugaritic',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Vai' => array(
		'label' => 'Noto Sans Vai',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'vai',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Wancho' => array(
		'label' => 'Noto Sans Wancho',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'wancho',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Warang Citi' => array(
		'label' => 'Noto Sans Warang Citi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'warang-citi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Yi' => array(
		'label' => 'Noto Sans Yi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'yi',
		),
		'category' => 'sans-serif',
	),
	'Noto Sans Zanabazar Square' => array(
		'label' => 'Noto Sans Zanabazar Square',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'zanabazar-square',
		),
		'category' => 'sans-serif',
	),
	'Noto Serif' => array(
		'label' => 'Noto Serif',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Noto Serif Ahom' => array(
		'label' => 'Noto Serif Ahom',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'ahom',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Armenian' => array(
		'label' => 'Noto Serif Armenian',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'armenian',
		),
		'category' => 'serif',
	),
	'Noto Serif Balinese' => array(
		'label' => 'Noto Serif Balinese',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'balinese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Bengali' => array(
		'label' => 'Noto Serif Bengali',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Devanagari' => array(
		'label' => 'Noto Serif Devanagari',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Display' => array(
		'label' => 'Noto Serif Display',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Noto Serif Dogra' => array(
		'label' => 'Noto Serif Dogra',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'dogra',
		),
		'category' => 'serif',
	),
	'Noto Serif Ethiopic' => array(
		'label' => 'Noto Serif Ethiopic',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'ethiopic',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Georgian' => array(
		'label' => 'Noto Serif Georgian',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'georgian',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Grantha' => array(
		'label' => 'Noto Serif Grantha',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'grantha',
		),
		'category' => 'serif',
	),
	'Noto Serif Gujarati' => array(
		'label' => 'Noto Serif Gujarati',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Gurmukhi' => array(
		'label' => 'Noto Serif Gurmukhi',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif HK' => array(
		'label' => 'Noto Serif HK',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'chinese-hongkong',
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Noto Serif Hebrew' => array(
		'label' => 'Noto Serif Hebrew',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif JP' => array(
		'label' => 'Noto Serif JP',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
		),
		'category' => 'serif',
	),
	'Noto Serif KR' => array(
		'label' => 'Noto Serif KR',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'serif',
	),
	'Noto Serif Kannada' => array(
		'label' => 'Noto Serif Kannada',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Khmer' => array(
		'label' => 'Noto Serif Khmer',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Lao' => array(
		'label' => 'Noto Serif Lao',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'lao',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Noto Serif Malayalam' => array(
		'label' => 'Noto Serif Malayalam',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'malayalam',
		),
		'category' => 'serif',
	),
	'Noto Serif Myanmar' => array(
		'label' => 'Noto Serif Myanmar',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'myanmar',
		),
		'category' => 'serif',
	),
	'Noto Serif Nyiakeng Puachue Hmong' => array(
		'label' => 'Noto Serif Nyiakeng Puachue Hmong',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'nyiakeng-puachue-hmong',
		),
		'category' => 'serif',
	),
	'Noto Serif SC' => array(
		'label' => 'Noto Serif SC',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'serif',
	),
	'Noto Serif Sinhala' => array(
		'label' => 'Noto Serif Sinhala',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'sinhala',
		),
		'category' => 'serif',
	),
	'Noto Serif TC' => array(
		'label' => 'Noto Serif TC',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'chinese-traditional',
			'latin',
		),
		'category' => 'serif',
	),
	'Noto Serif Tamil' => array(
		'label' => 'Noto Serif Tamil',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'serif',
	),
	'Noto Serif Tangut' => array(
		'label' => 'Noto Serif Tangut',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'tangut',
		),
		'category' => 'serif',
	),
	'Noto Serif Telugu' => array(
		'label' => 'Noto Serif Telugu',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'telugu',
		),
		'category' => 'serif',
	),
	'Noto Serif Thai' => array(
		'label' => 'Noto Serif Thai',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
		),
		'category' => 'serif',
	),
	'Noto Serif Tibetan' => array(
		'label' => 'Noto Serif Tibetan',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'tibetan',
		),
		'category' => 'serif',
	),
	'Noto Serif Yezidi' => array(
		'label' => 'Noto Serif Yezidi',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'yezidi',
		),
		'category' => 'serif',
	),
	'Noto Traditional Nushu' => array(
		'label' => 'Noto Traditional Nushu',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'nushu',
		),
		'category' => 'sans-serif',
	),
	'Nova Cut' => array(
		'label' => 'Nova Cut',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Nova Flat' => array(
		'label' => 'Nova Flat',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Nova Mono' => array(
		'label' => 'Nova Mono',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'greek',
			'latin',
		),
		'category' => 'monospace',
	),
	'Nova Oval' => array(
		'label' => 'Nova Oval',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Nova Round' => array(
		'label' => 'Nova Round',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Nova Script' => array(
		'label' => 'Nova Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Nova Slim' => array(
		'label' => 'Nova Slim',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Nova Square' => array(
		'label' => 'Nova Square',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Numans' => array(
		'label' => 'Numans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Nunito' => array(
		'label' => 'Nunito',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Nunito Sans' => array(
		'label' => 'Nunito Sans',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Nuosu SIL' => array(
		'label' => 'Nuosu SIL',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'yi',
		),
		'category' => 'serif',
	),
	'Odibee Sans' => array(
		'label' => 'Odibee Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Odor Mean Chey' => array(
		'label' => 'Odor Mean Chey',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'serif',
	),
	'Offside' => array(
		'label' => 'Offside',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Oi' => array(
		'label' => 'Oi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'tamil',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Old Standard TT' => array(
		'label' => 'Old Standard TT',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Oldenburg' => array(
		'label' => 'Oldenburg',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Ole' => array(
		'label' => 'Ole',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Oleo Script' => array(
		'label' => 'Oleo Script',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Oleo Script Swash Caps' => array(
		'label' => 'Oleo Script Swash Caps',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Oooh Baby' => array(
		'label' => 'Oooh Baby',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Open Sans' => array(
		'label' => 'Open Sans',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Oranienbaum' => array(
		'label' => 'Oranienbaum',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Orbitron' => array(
		'label' => 'Orbitron',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Oregano' => array(
		'label' => 'Oregano',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Orelega One' => array(
		'label' => 'Orelega One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Orienta' => array(
		'label' => 'Orienta',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Original Surfer' => array(
		'label' => 'Original Surfer',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Oswald' => array(
		'label' => 'Oswald',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Outfit' => array(
		'label' => 'Outfit',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Over the Rainbow' => array(
		'label' => 'Over the Rainbow',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Overlock' => array(
		'label' => 'Overlock',
		'variants' => array(
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Overlock SC' => array(
		'label' => 'Overlock SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Overpass' => array(
		'label' => 'Overpass',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Overpass Mono' => array(
		'label' => 'Overpass Mono',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Ovo' => array(
		'label' => 'Ovo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Oxanium' => array(
		'label' => 'Oxanium',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Oxygen' => array(
		'label' => 'Oxygen',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Oxygen Mono' => array(
		'label' => 'Oxygen Mono',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'PT Mono' => array(
		'label' => 'PT Mono',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'PT Sans' => array(
		'label' => 'PT Sans',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'PT Sans Caption' => array(
		'label' => 'PT Sans Caption',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'PT Sans Narrow' => array(
		'label' => 'PT Sans Narrow',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'PT Serif' => array(
		'label' => 'PT Serif',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'PT Serif Caption' => array(
		'label' => 'PT Serif Caption',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Pacifico' => array(
		'label' => 'Pacifico',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Padauk' => array(
		'label' => 'Padauk',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'myanmar',
		),
		'category' => 'sans-serif',
	),
	'Palanquin' => array(
		'label' => 'Palanquin',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Palanquin Dark' => array(
		'label' => 'Palanquin Dark',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Pangolin' => array(
		'label' => 'Pangolin',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Paprika' => array(
		'label' => 'Paprika',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Parisienne' => array(
		'label' => 'Parisienne',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Passero One' => array(
		'label' => 'Passero One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Passion One' => array(
		'label' => 'Passion One',
		'variants' => array(
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Passions Conflict' => array(
		'label' => 'Passions Conflict',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Pathway Gothic One' => array(
		'label' => 'Pathway Gothic One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Patrick Hand' => array(
		'label' => 'Patrick Hand',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Patrick Hand SC' => array(
		'label' => 'Patrick Hand SC',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Pattaya' => array(
		'label' => 'Pattaya',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Patua One' => array(
		'label' => 'Patua One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Pavanam' => array(
		'label' => 'Pavanam',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'sans-serif',
	),
	'Paytone One' => array(
		'label' => 'Paytone One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Peddana' => array(
		'label' => 'Peddana',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'serif',
	),
	'Peralta' => array(
		'label' => 'Peralta',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Permanent Marker' => array(
		'label' => 'Permanent Marker',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Petemoss' => array(
		'label' => 'Petemoss',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Petit Formal Script' => array(
		'label' => 'Petit Formal Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Petrona' => array(
		'label' => 'Petrona',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Philosopher' => array(
		'label' => 'Philosopher',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Piazzolla' => array(
		'label' => 'Piazzolla',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Piedra' => array(
		'label' => 'Piedra',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Pinyon Script' => array(
		'label' => 'Pinyon Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Pirata One' => array(
		'label' => 'Pirata One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Plaster' => array(
		'label' => 'Plaster',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Play' => array(
		'label' => 'Play',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Playball' => array(
		'label' => 'Playball',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Playfair Display' => array(
		'label' => 'Playfair Display',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Playfair Display SC' => array(
		'label' => 'Playfair Display SC',
		'variants' => array(
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Plus Jakarta Sans' => array(
		'label' => 'Plus Jakarta Sans',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Podkova' => array(
		'label' => 'Podkova',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Poiret One' => array(
		'label' => 'Poiret One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Poller One' => array(
		'label' => 'Poller One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Poly' => array(
		'label' => 'Poly',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Pompiere' => array(
		'label' => 'Pompiere',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Pontano Sans' => array(
		'label' => 'Pontano Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Poor Story' => array(
		'label' => 'Poor Story',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'display',
	),
	'Poppins' => array(
		'label' => 'Poppins',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Port Lligat Sans' => array(
		'label' => 'Port Lligat Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Port Lligat Slab' => array(
		'label' => 'Port Lligat Slab',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Potta One' => array(
		'label' => 'Potta One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Pragati Narrow' => array(
		'label' => 'Pragati Narrow',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Praise' => array(
		'label' => 'Praise',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Prata' => array(
		'label' => 'Prata',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Preahvihear' => array(
		'label' => 'Preahvihear',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Press Start 2P' => array(
		'label' => 'Press Start 2P',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Pridi' => array(
		'label' => 'Pridi',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Princess Sofia' => array(
		'label' => 'Princess Sofia',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Prociono' => array(
		'label' => 'Prociono',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Prompt' => array(
		'label' => 'Prompt',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Prosto One' => array(
		'label' => 'Prosto One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Proza Libre' => array(
		'label' => 'Proza Libre',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Public Sans' => array(
		'label' => 'Public Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Puppies Play' => array(
		'label' => 'Puppies Play',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Puritan' => array(
		'label' => 'Puritan',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Purple Purse' => array(
		'label' => 'Purple Purse',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Qahiri' => array(
		'label' => 'Qahiri',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Quando' => array(
		'label' => 'Quando',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Quantico' => array(
		'label' => 'Quantico',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Quattrocento' => array(
		'label' => 'Quattrocento',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Quattrocento Sans' => array(
		'label' => 'Quattrocento Sans',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Questrial' => array(
		'label' => 'Questrial',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Quicksand' => array(
		'label' => 'Quicksand',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Quintessential' => array(
		'label' => 'Quintessential',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Qwigley' => array(
		'label' => 'Qwigley',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Qwitcher Grypen' => array(
		'label' => 'Qwitcher Grypen',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Racing Sans One' => array(
		'label' => 'Racing Sans One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Radio Canada' => array(
		'label' => 'Radio Canada',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Radley' => array(
		'label' => 'Radley',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Rajdhani' => array(
		'label' => 'Rajdhani',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Rakkas' => array(
		'label' => 'Rakkas',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Raleway' => array(
		'label' => 'Raleway',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Raleway Dots' => array(
		'label' => 'Raleway Dots',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Ramabhadra' => array(
		'label' => 'Ramabhadra',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Ramaraja' => array(
		'label' => 'Ramaraja',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'serif',
	),
	'Rambla' => array(
		'label' => 'Rambla',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Rammetto One' => array(
		'label' => 'Rammetto One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rampart One' => array(
		'label' => 'Rampart One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Ranchers' => array(
		'label' => 'Ranchers',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rancho' => array(
		'label' => 'Rancho',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Ranga' => array(
		'label' => 'Ranga',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rasa' => array(
		'label' => 'Rasa',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Rationale' => array(
		'label' => 'Rationale',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Ravi Prakash' => array(
		'label' => 'Ravi Prakash',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'display',
	),
	'Readex Pro' => array(
		'label' => 'Readex Pro',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Recursive' => array(
		'label' => 'Recursive',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Red Hat Display' => array(
		'label' => 'Red Hat Display',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Red Hat Mono' => array(
		'label' => 'Red Hat Mono',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Red Hat Text' => array(
		'label' => 'Red Hat Text',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Red Rose' => array(
		'label' => 'Red Rose',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Redacted' => array(
		'label' => 'Redacted',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Redacted Script' => array(
		'label' => 'Redacted Script',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Redressed' => array(
		'label' => 'Redressed',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Reem Kufi' => array(
		'label' => 'Reem Kufi',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Reem Kufi Fun' => array(
		'label' => 'Reem Kufi Fun',
		'variants' => array(
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Reem Kufi Ink' => array(
		'label' => 'Reem Kufi Ink',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Reenie Beanie' => array(
		'label' => 'Reenie Beanie',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Reggae One' => array(
		'label' => 'Reggae One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Revalia' => array(
		'label' => 'Revalia',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rhodium Libre' => array(
		'label' => 'Rhodium Libre',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Ribeye' => array(
		'label' => 'Ribeye',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Ribeye Marrow' => array(
		'label' => 'Ribeye Marrow',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Righteous' => array(
		'label' => 'Righteous',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Risque' => array(
		'label' => 'Risque',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Road Rage' => array(
		'label' => 'Road Rage',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Roboto' => array(
		'label' => 'Roboto',
		'variants' => array(
			'100',
			'100italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Roboto Condensed' => array(
		'label' => 'Roboto Condensed',
		'variants' => array(
			'300',
			'300italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Roboto Flex' => array(
		'label' => 'Roboto Flex',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Roboto Mono' => array(
		'label' => 'Roboto Mono',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Roboto Serif' => array(
		'label' => 'Roboto Serif',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Roboto Slab' => array(
		'label' => 'Roboto Slab',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Rochester' => array(
		'label' => 'Rochester',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Rock Salt' => array(
		'label' => 'Rock Salt',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'RocknRoll One' => array(
		'label' => 'RocknRoll One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Rokkitt' => array(
		'label' => 'Rokkitt',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Romanesco' => array(
		'label' => 'Romanesco',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Ropa Sans' => array(
		'label' => 'Ropa Sans',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Rosario' => array(
		'label' => 'Rosario',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Rosarivo' => array(
		'label' => 'Rosarivo',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Rouge Script' => array(
		'label' => 'Rouge Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Rowdies' => array(
		'label' => 'Rowdies',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Rozha One' => array(
		'label' => 'Rozha One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Rubik' => array(
		'label' => 'Rubik',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Rubik Beastly' => array(
		'label' => 'Rubik Beastly',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Bubbles' => array(
		'label' => 'Rubik Bubbles',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Burned' => array(
		'label' => 'Rubik Burned',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Dirt' => array(
		'label' => 'Rubik Dirt',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Distressed' => array(
		'label' => 'Rubik Distressed',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Glitch' => array(
		'label' => 'Rubik Glitch',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Iso' => array(
		'label' => 'Rubik Iso',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Marker Hatch' => array(
		'label' => 'Rubik Marker Hatch',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Maze' => array(
		'label' => 'Rubik Maze',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Microbe' => array(
		'label' => 'Rubik Microbe',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Mono One' => array(
		'label' => 'Rubik Mono One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Rubik Moonrocks' => array(
		'label' => 'Rubik Moonrocks',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Puddles' => array(
		'label' => 'Rubik Puddles',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Rubik Wet Paint' => array(
		'label' => 'Rubik Wet Paint',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Ruda' => array(
		'label' => 'Ruda',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Rufina' => array(
		'label' => 'Rufina',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Ruge Boogie' => array(
		'label' => 'Ruge Boogie',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Ruluko' => array(
		'label' => 'Ruluko',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Rum Raisin' => array(
		'label' => 'Rum Raisin',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Ruslan Display' => array(
		'label' => 'Ruslan Display',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Russo One' => array(
		'label' => 'Russo One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Ruthie' => array(
		'label' => 'Ruthie',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Rye' => array(
		'label' => 'Rye',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'STIX Two Text' => array(
		'label' => 'STIX Two Text',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Sacramento' => array(
		'label' => 'Sacramento',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Sahitya' => array(
		'label' => 'Sahitya',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
		),
		'category' => 'serif',
	),
	'Sail' => array(
		'label' => 'Sail',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Saira' => array(
		'label' => 'Saira',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Saira Condensed' => array(
		'label' => 'Saira Condensed',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Saira Extra Condensed' => array(
		'label' => 'Saira Extra Condensed',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Saira Semi Condensed' => array(
		'label' => 'Saira Semi Condensed',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Saira Stencil One' => array(
		'label' => 'Saira Stencil One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Salsa' => array(
		'label' => 'Salsa',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Sanchez' => array(
		'label' => 'Sanchez',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Sancreek' => array(
		'label' => 'Sancreek',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Sansita' => array(
		'label' => 'Sansita',
		'variants' => array(
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Sansita Swashed' => array(
		'label' => 'Sansita Swashed',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Sarabun' => array(
		'label' => 'Sarabun',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Sarala' => array(
		'label' => 'Sarala',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Sarina' => array(
		'label' => 'Sarina',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Sarpanch' => array(
		'label' => 'Sarpanch',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Sassy Frass' => array(
		'label' => 'Sassy Frass',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Satisfy' => array(
		'label' => 'Satisfy',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Sawarabi Gothic' => array(
		'label' => 'Sawarabi Gothic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Sawarabi Mincho' => array(
		'label' => 'Sawarabi Mincho',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Scada' => array(
		'label' => 'Scada',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Scheherazade New' => array(
		'label' => 'Scheherazade New',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Schoolbell' => array(
		'label' => 'Schoolbell',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Scope One' => array(
		'label' => 'Scope One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Seaweed Script' => array(
		'label' => 'Seaweed Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Secular One' => array(
		'label' => 'Secular One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Sedgwick Ave' => array(
		'label' => 'Sedgwick Ave',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Sedgwick Ave Display' => array(
		'label' => 'Sedgwick Ave Display',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Sen' => array(
		'label' => 'Sen',
		'variants' => array(
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Send Flowers' => array(
		'label' => 'Send Flowers',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Sevillana' => array(
		'label' => 'Sevillana',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Seymour One' => array(
		'label' => 'Seymour One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Shadows Into Light' => array(
		'label' => 'Shadows Into Light',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Shadows Into Light Two' => array(
		'label' => 'Shadows Into Light Two',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Shalimar' => array(
		'label' => 'Shalimar',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Shanti' => array(
		'label' => 'Shanti',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Share' => array(
		'label' => 'Share',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Share Tech' => array(
		'label' => 'Share Tech',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Share Tech Mono' => array(
		'label' => 'Share Tech Mono',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'monospace',
	),
	'Shippori Antique' => array(
		'label' => 'Shippori Antique',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Shippori Antique B1' => array(
		'label' => 'Shippori Antique B1',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Shippori Mincho' => array(
		'label' => 'Shippori Mincho',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Shippori Mincho B1' => array(
		'label' => 'Shippori Mincho B1',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Shojumaru' => array(
		'label' => 'Shojumaru',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Short Stack' => array(
		'label' => 'Short Stack',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Shrikhand' => array(
		'label' => 'Shrikhand',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'gujarati',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Siemreap' => array(
		'label' => 'Siemreap',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
		),
		'category' => 'display',
	),
	'Sigmar One' => array(
		'label' => 'Sigmar One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Signika' => array(
		'label' => 'Signika',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Signika Negative' => array(
		'label' => 'Signika Negative',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Silkscreen' => array(
		'label' => 'Silkscreen',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Simonetta' => array(
		'label' => 'Simonetta',
		'variants' => array(
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Single Day' => array(
		'label' => 'Single Day',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
		),
		'category' => 'display',
	),
	'Sintony' => array(
		'label' => 'Sintony',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Sirin Stencil' => array(
		'label' => 'Sirin Stencil',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Six Caps' => array(
		'label' => 'Six Caps',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Skranji' => array(
		'label' => 'Skranji',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Slabo 13px' => array(
		'label' => 'Slabo 13px',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Slabo 27px' => array(
		'label' => 'Slabo 27px',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Slackey' => array(
		'label' => 'Slackey',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Smokum' => array(
		'label' => 'Smokum',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Smooch' => array(
		'label' => 'Smooch',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Smooch Sans' => array(
		'label' => 'Smooch Sans',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Smythe' => array(
		'label' => 'Smythe',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Sniglet' => array(
		'label' => 'Sniglet',
		'variants' => array(
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Snippet' => array(
		'label' => 'Snippet',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Snowburst One' => array(
		'label' => 'Snowburst One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Sofadi One' => array(
		'label' => 'Sofadi One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Sofia' => array(
		'label' => 'Sofia',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Solway' => array(
		'label' => 'Solway',
		'variants' => array(
			'300',
			'500',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Song Myung' => array(
		'label' => 'Song Myung',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'serif',
	),
	'Sonsie One' => array(
		'label' => 'Sonsie One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Sora' => array(
		'label' => 'Sora',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Sorts Mill Goudy' => array(
		'label' => 'Sorts Mill Goudy',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Source Code Pro' => array(
		'label' => 'Source Code Pro',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Source Sans 3' => array(
		'label' => 'Source Sans 3',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Source Sans Pro' => array(
		'label' => 'Source Sans Pro',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Source Serif 4' => array(
		'label' => 'Source Serif 4',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Source Serif Pro' => array(
		'label' => 'Source Serif Pro',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Space Grotesk' => array(
		'label' => 'Space Grotesk',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Space Mono' => array(
		'label' => 'Space Mono',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Special Elite' => array(
		'label' => 'Special Elite',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Spectral' => array(
		'label' => 'Spectral',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Spectral SC' => array(
		'label' => 'Spectral SC',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Spicy Rice' => array(
		'label' => 'Spicy Rice',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Spinnaker' => array(
		'label' => 'Spinnaker',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Spirax' => array(
		'label' => 'Spirax',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Splash' => array(
		'label' => 'Splash',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Spline Sans' => array(
		'label' => 'Spline Sans',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Spline Sans Mono' => array(
		'label' => 'Spline Sans Mono',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Squada One' => array(
		'label' => 'Squada One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Square Peg' => array(
		'label' => 'Square Peg',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Sree Krushnadevaraya' => array(
		'label' => 'Sree Krushnadevaraya',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'serif',
	),
	'Sriracha' => array(
		'label' => 'Sriracha',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Srisakdi' => array(
		'label' => 'Srisakdi',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Staatliches' => array(
		'label' => 'Staatliches',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Stalemate' => array(
		'label' => 'Stalemate',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Stalinist One' => array(
		'label' => 'Stalinist One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Stardos Stencil' => array(
		'label' => 'Stardos Stencil',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Stick' => array(
		'label' => 'Stick',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Stick No Bills' => array(
		'label' => 'Stick No Bills',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'sinhala',
		),
		'category' => 'sans-serif',
	),
	'Stint Ultra Condensed' => array(
		'label' => 'Stint Ultra Condensed',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Stint Ultra Expanded' => array(
		'label' => 'Stint Ultra Expanded',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Stoke' => array(
		'label' => 'Stoke',
		'variants' => array(
			'300',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Strait' => array(
		'label' => 'Strait',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Style Script' => array(
		'label' => 'Style Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Stylish' => array(
		'label' => 'Stylish',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Sue Ellen Francisco' => array(
		'label' => 'Sue Ellen Francisco',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Suez One' => array(
		'label' => 'Suez One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Sulphur Point' => array(
		'label' => 'Sulphur Point',
		'variants' => array(
			'300',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Sumana' => array(
		'label' => 'Sumana',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Sunflower' => array(
		'label' => 'Sunflower',
		'variants' => array(
			'300',
			'500',
			'700',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Sunshiney' => array(
		'label' => 'Sunshiney',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Supermercado One' => array(
		'label' => 'Supermercado One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Sura' => array(
		'label' => 'Sura',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Suranna' => array(
		'label' => 'Suranna',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'serif',
	),
	'Suravaram' => array(
		'label' => 'Suravaram',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'serif',
	),
	'Suwannaphum' => array(
		'label' => 'Suwannaphum',
		'variants' => array(
			'100',
			'300',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'serif',
	),
	'Swanky and Moo Moo' => array(
		'label' => 'Swanky and Moo Moo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Syncopate' => array(
		'label' => 'Syncopate',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Syne' => array(
		'label' => 'Syne',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'greek',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Syne Mono' => array(
		'label' => 'Syne Mono',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Syne Tactile' => array(
		'label' => 'Syne Tactile',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Tai Heritage Pro' => array(
		'label' => 'Tai Heritage Pro',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tai-viet',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Tajawal' => array(
		'label' => 'Tajawal',
		'variants' => array(
			'200',
			'300',
			'500',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Tangerine' => array(
		'label' => 'Tangerine',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Tapestry' => array(
		'label' => 'Tapestry',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Taprom' => array(
		'label' => 'Taprom',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'khmer',
			'latin',
		),
		'category' => 'display',
	),
	'Tauri' => array(
		'label' => 'Tauri',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Taviraj' => array(
		'label' => 'Taviraj',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Teko' => array(
		'label' => 'Teko',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Telex' => array(
		'label' => 'Telex',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Tenali Ramakrishna' => array(
		'label' => 'Tenali Ramakrishna',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Tenor Sans' => array(
		'label' => 'Tenor Sans',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Text Me One' => array(
		'label' => 'Text Me One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Texturina' => array(
		'label' => 'Texturina',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Thasadith' => array(
		'label' => 'Thasadith',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'The Girl Next Door' => array(
		'label' => 'The Girl Next Door',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'The Nautigal' => array(
		'label' => 'The Nautigal',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Tienne' => array(
		'label' => 'Tienne',
		'variants' => array(
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Tillana' => array(
		'label' => 'Tillana',
		'variants' => array(
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'handwriting',
	),
	'Timmana' => array(
		'label' => 'Timmana',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'telugu',
		),
		'category' => 'sans-serif',
	),
	'Tinos' => array(
		'label' => 'Tinos',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Tiro Bangla' => array(
		'label' => 'Tiro Bangla',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'bengali',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Tiro Devanagari Hindi' => array(
		'label' => 'Tiro Devanagari Hindi',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Tiro Devanagari Marathi' => array(
		'label' => 'Tiro Devanagari Marathi',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Tiro Devanagari Sanskrit' => array(
		'label' => 'Tiro Devanagari Sanskrit',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Tiro Gurmukhi' => array(
		'label' => 'Tiro Gurmukhi',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'gurmukhi',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Tiro Kannada' => array(
		'label' => 'Tiro Kannada',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'kannada',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Tiro Tamil' => array(
		'label' => 'Tiro Tamil',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'tamil',
		),
		'category' => 'serif',
	),
	'Tiro Telugu' => array(
		'label' => 'Tiro Telugu',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'telugu',
		),
		'category' => 'serif',
	),
	'Titan One' => array(
		'label' => 'Titan One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Titillium Web' => array(
		'label' => 'Titillium Web',
		'variants' => array(
			'200',
			'200italic',
			'300',
			'300italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'900',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Tomorrow' => array(
		'label' => 'Tomorrow',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Tourney' => array(
		'label' => 'Tourney',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Trade Winds' => array(
		'label' => 'Trade Winds',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Train One' => array(
		'label' => 'Train One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Trirong' => array(
		'label' => 'Trirong',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'thai',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Trispace' => array(
		'label' => 'Trispace',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Trocchi' => array(
		'label' => 'Trocchi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Trochut' => array(
		'label' => 'Trochut',
		'variants' => array(
			'700',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Truculenta' => array(
		'label' => 'Truculenta',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Trykker' => array(
		'label' => 'Trykker',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Tulpen One' => array(
		'label' => 'Tulpen One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Turret Road' => array(
		'label' => 'Turret Road',
		'variants' => array(
			'200',
			'300',
			'500',
			'700',
			'800',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Twinkle Star' => array(
		'label' => 'Twinkle Star',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Ubuntu' => array(
		'label' => 'Ubuntu',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Ubuntu Condensed' => array(
		'label' => 'Ubuntu Condensed',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Ubuntu Mono' => array(
		'label' => 'Ubuntu Mono',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'greek-ext',
			'latin',
			'latin-ext',
		),
		'category' => 'monospace',
	),
	'Uchen' => array(
		'label' => 'Uchen',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'tibetan',
		),
		'category' => 'serif',
	),
	'Ultra' => array(
		'label' => 'Ultra',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Uncial Antiqua' => array(
		'label' => 'Uncial Antiqua',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Underdog' => array(
		'label' => 'Underdog',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Unica One' => array(
		'label' => 'Unica One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'UnifrakturCook' => array(
		'label' => 'UnifrakturCook',
		'variants' => array(
			'700',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'UnifrakturMaguntia' => array(
		'label' => 'UnifrakturMaguntia',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Unkempt' => array(
		'label' => 'Unkempt',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Unlock' => array(
		'label' => 'Unlock',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Unna' => array(
		'label' => 'Unna',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Updock' => array(
		'label' => 'Updock',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Urbanist' => array(
		'label' => 'Urbanist',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'VT323' => array(
		'label' => 'VT323',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Vampiro One' => array(
		'label' => 'Vampiro One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Varela' => array(
		'label' => 'Varela',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Varela Round' => array(
		'label' => 'Varela Round',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'hebrew',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Varta' => array(
		'label' => 'Varta',
		'variants' => array(
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Vast Shadow' => array(
		'label' => 'Vast Shadow',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Vazirmatn' => array(
		'label' => 'Vazirmatn',
		'variants' => array(
			'100',
			'200',
			'300',
			'500',
			'600',
			'700',
			'800',
			'900',
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Vesper Libre' => array(
		'label' => 'Vesper Libre',
		'variants' => array(
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Viaoda Libre' => array(
		'label' => 'Viaoda Libre',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Vibes' => array(
		'label' => 'Vibes',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'arabic',
			'latin',
		),
		'category' => 'display',
	),
	'Vibur' => array(
		'label' => 'Vibur',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Vidaloka' => array(
		'label' => 'Vidaloka',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Viga' => array(
		'label' => 'Viga',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Voces' => array(
		'label' => 'Voces',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Volkhov' => array(
		'label' => 'Volkhov',
		'variants' => array(
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'serif',
	),
	'Vollkorn' => array(
		'label' => 'Vollkorn',
		'variants' => array(
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'greek',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Vollkorn SC' => array(
		'label' => 'Vollkorn SC',
		'variants' => array(
			'600',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Voltaire' => array(
		'label' => 'Voltaire',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Vujahday Script' => array(
		'label' => 'Vujahday Script',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Waiting for the Sunrise' => array(
		'label' => 'Waiting for the Sunrise',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Wallpoet' => array(
		'label' => 'Wallpoet',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'display',
	),
	'Walter Turncoat' => array(
		'label' => 'Walter Turncoat',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Warnes' => array(
		'label' => 'Warnes',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Water Brush' => array(
		'label' => 'Water Brush',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Waterfall' => array(
		'label' => 'Waterfall',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Wellfleet' => array(
		'label' => 'Wellfleet',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Wendy One' => array(
		'label' => 'Wendy One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Whisper' => array(
		'label' => 'Whisper',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'WindSong' => array(
		'label' => 'WindSong',
		'variants' => array(
			'500',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Wire One' => array(
		'label' => 'Wire One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'sans-serif',
	),
	'Work Sans' => array(
		'label' => 'Work Sans',
		'variants' => array(
			'100',
			'100italic',
			'200',
			'200italic',
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'800',
			'800italic',
			'900',
			'900italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Xanh Mono' => array(
		'label' => 'Xanh Mono',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'monospace',
	),
	'Yaldevi' => array(
		'label' => 'Yaldevi',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'sinhala',
		),
		'category' => 'sans-serif',
	),
	'Yanone Kaffeesatz' => array(
		'label' => 'Yanone Kaffeesatz',
		'variants' => array(
			'200',
			'300',
			'500',
			'600',
			'700',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'sans-serif',
	),
	'Yantramanav' => array(
		'label' => 'Yantramanav',
		'variants' => array(
			'100',
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Yatra One' => array(
		'label' => 'Yatra One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'devanagari',
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Yellowtail' => array(
		'label' => 'Yellowtail',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Yeon Sung' => array(
		'label' => 'Yeon Sung',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'korean',
			'latin',
		),
		'category' => 'display',
	),
	'Yeseva One' => array(
		'label' => 'Yeseva One',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'cyrillic-ext',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'display',
	),
	'Yesteryear' => array(
		'label' => 'Yesteryear',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Yomogi' => array(
		'label' => 'Yomogi',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'handwriting',
	),
	'Yrsa' => array(
		'label' => 'Yrsa',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
			'vietnamese',
		),
		'category' => 'serif',
	),
	'Yuji Boku' => array(
		'label' => 'Yuji Boku',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Yuji Mai' => array(
		'label' => 'Yuji Mai',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Yuji Syuku' => array(
		'label' => 'Yuji Syuku',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Yusei Magic' => array(
		'label' => 'Yusei Magic',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'ZCOOL KuaiLe' => array(
		'label' => 'ZCOOL KuaiLe',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'display',
	),
	'ZCOOL QingKe HuangYou' => array(
		'label' => 'ZCOOL QingKe HuangYou',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'display',
	),
	'ZCOOL XiaoWei' => array(
		'label' => 'ZCOOL XiaoWei',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'serif',
	),
	'Zen Antique' => array(
		'label' => 'Zen Antique',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Zen Antique Soft' => array(
		'label' => 'Zen Antique Soft',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Zen Dots' => array(
		'label' => 'Zen Dots',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Zen Kaku Gothic Antique' => array(
		'label' => 'Zen Kaku Gothic Antique',
		'variants' => array(
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Zen Kaku Gothic New' => array(
		'label' => 'Zen Kaku Gothic New',
		'variants' => array(
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Zen Kurenaido' => array(
		'label' => 'Zen Kurenaido',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Zen Loop' => array(
		'label' => 'Zen Loop',
		'variants' => array(
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Zen Maru Gothic' => array(
		'label' => 'Zen Maru Gothic',
		'variants' => array(
			'300',
			'500',
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'sans-serif',
	),
	'Zen Old Mincho' => array(
		'label' => 'Zen Old Mincho',
		'variants' => array(
			'700',
			'900',
			'regular',
		),
		'subsets' => array(
			'cyrillic',
			'greek',
			'japanese',
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Zen Tokyo Zoo' => array(
		'label' => 'Zen Tokyo Zoo',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
	'Zeyada' => array(
		'label' => 'Zeyada',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'latin',
		),
		'category' => 'handwriting',
	),
	'Zhi Mang Xing' => array(
		'label' => 'Zhi Mang Xing',
		'variants' => array(
			'regular',
		),
		'subsets' => array(
			'chinese-simplified',
			'latin',
		),
		'category' => 'handwriting',
	),
	'Zilla Slab' => array(
		'label' => 'Zilla Slab',
		'variants' => array(
			'300',
			'300italic',
			'500',
			'500italic',
			'600',
			'600italic',
			'700',
			'700italic',
			'italic',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'serif',
	),
	'Zilla Slab Highlight' => array(
		'label' => 'Zilla Slab Highlight',
		'variants' => array(
			'700',
			'regular',
		),
		'subsets' => array(
			'latin',
			'latin-ext',
		),
		'category' => 'display',
	),
) );