$api_key = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJodHRwczovL2FjY291bnRzLmFwcGVhci5pbiIsImF1ZCI6Imh0dHBzOi8vYXBpLmFwcGVhci5pbi92MSIsImV4cCI6OTAwNzE5OTI1NDc0MDk5MSwiaWF0IjoxNjI2OTI4ODUzLCJvcmdhbml6YXRpb25JZCI6MTIxNzgzLCJqdGkiOiIxNWM4NGU5NS0yMzMyLTQ3YTItYWRiYS1lNjcwMzc2NTNkYmUifQ.sMH0JvesejZD21-n36H32B9T7I-LY0sEvA4z5xcwxSQ";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.whereby.dev/v1/meetings');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
  "startDate": "2021-07-22T04:40:00.000Z",
  "endDate": "2021-07-23T04:39:00.000Z",
  "fields": ["hostRoomUrl"]}'
);

$headers = [
  'Authorization: Bearer ' . $api_key,
  'Content-Type: application/json'
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "Status code: $httpcode\n";
$data = json_decode($response);
echo "Room URL: ", $data->{'photoeditz.github.io/joinclass'}, "\n";
echo "Host room URL: ", $data->{'hostRoomUrl'}, "\n";
