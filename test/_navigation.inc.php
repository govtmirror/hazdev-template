<?php

echo navItem('/', 'Test') .
		navGroup(null, 'Group 1',
				navItem('#', 'Group item 1') .
				navItem('#', 'Group item 2')) .
		navItem('#', 'Item') .
		navGroup('#', 'Group 2',
				navItem('#', 'Group item 1') .
				navItem('#', 'Group item 2'));
