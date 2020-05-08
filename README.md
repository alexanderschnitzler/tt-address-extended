# tt-address-extended
Demo extension showing how to extend models in TYPO3 10.


## Install

* This demo extension is **NOT** available via packagist, so you **MUST** clone this repository into your local `typo3conf/ext/` folder.
  You **MUST** rename the extension folder to `tt_address_extended`.

* Install the extension and make sure the database compare worked and you have a new field `custom` in table `tt_address`.

* Create or select a page and create a plugin content element on it.

* Create a demo address record on the same page.

* You **SHOULD** clear all caches

## See it in action

Simply open the demo page in the frontend. The demo controller creates a debug output showing all extended address records of the same page, including the new `custom` property.
