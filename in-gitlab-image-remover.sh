#!/bin/bash
#We delete the old image latest image in the repsitory
RESPONSE=$(curl --header "PRIVATE-TOKEN:$CI_TOKEN" "https://gitlab.liloteam.org/api/v4/projects/2/registry/repositories/1/tags/latest")
if [[ "$RESPONSE" == *"message"* ]]; then
	echo 'not latest tag found'
else
	curl --request DELETE --header "PRIVATE-TOKEN:$CI_TOKEN" "https://gitlab.liloteam.org/api/v4/projects/2/registry/repositories/1/tags/latest"
fi;
