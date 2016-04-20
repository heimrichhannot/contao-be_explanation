# Backend Explanation

This module offers a simple backend explanation form field (inputType).

## Technical instructions

Just add the field to some of your data container arrays as follows:

```
$GLOBALS['TL_DCA']['tl_*']['fields']['myExplanation'] = array
(
    'inputType' => 'explanation',
    'eval'      => array(
        'text'     => &$GLOBALS['TL_LANG']['tl_*']['myExplanation'],
        'class'    => 'tl_info', // all contao message css classes are possible
        'tl_class' => 'long'
    )
);
```