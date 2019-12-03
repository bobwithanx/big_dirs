#!/bin/bash

# big_dirs controller
CTL="${BASEURL}index.php?/module/big_dirs/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/big_dirs.sh" -o "${MUNKIPATH}preflight.d/big_dirs.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/big_dirs.sh"

	# Set preference to include this file in the preflight check
	setreportpref "big_dirs" "${CACHEPATH}big_dirs.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/big_dirs.sh"

	# Signal that we had an error
	ERR=1
fi
