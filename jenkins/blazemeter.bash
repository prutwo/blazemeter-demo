#!/bin/bash

export BZA=http://a.blazemeter.com
export BZA_API_KEY=3e777ceb0863a9700800
export TEST_ID=5032643

echo -n "Running test on " $BZA
echo -n "Test ID = " $TEST_ID

SESSION_ID=$(curl --silent --insecure ${BZA}/api/latest/tests/${TEST_ID}/start?api_key=${BZA_API_KEY} | jq '.result.sessionsId[]' | tr -d \")
echo "Test started .."

TEST_RUN_STATUS=$(curl --silent --insecure ${BZA}/api/latest/sessions/${SESSION_ID}?api_key=${BZA_API_KEY} | jq '.result.status' | tr -d \" )

while [ "$TEST_RUN_STATUS" != "ENDED" ]; do
        echo "Test status = " $TEST_RUN_STATUS
        echo "Report is visible here: ${BZA}/app/#report/${SESSION_ID}/loadreport"
        sleep 30
        echo "Trying again .."
	TEST_RUN_STATUS=$(curl --silent --insecure ${BZA}/api/latest/sessions/${SESSION_ID}?api_key=${BZA_API_KEY} | jq '.result.status' | tr -d \" )
done

echo "Test status = " $TEST_RUN_STATUS
echo "Now fetching test's report (junit.xml)"

FETCH_RUN_STATUS=$(curl --silent --insecure ${BZA}/api/latest/sessions/${SESSION_ID}/reports/thresholds/data?format=junit\&api_key=${BZA_API_KEY} > ${WORKSPACE}/${SESSION_ID}.xml)

echo "Test has ended with status: $TEST_RUN_STATUS" 
echo "junit.xml was fetched with status: $FETCH_RUN_STATUS"
echo "Report is available here: ${BZA}/app/#reports/${SESSION_ID}/loadreport"
