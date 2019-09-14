#!/bin/bash --

set -e
set -x

# Run PHP 7.3 tests on phpBB 3.3.x branch
if [[ "${TRAVIS_PHP_VERSION}" == "7.3" ]]; then
	export PHPBB_BRANCH="3.3.x"
fi
