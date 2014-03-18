<?php
include ("PerunRpcClient.php");

// CLIENT
$client = new PerunRpcClient();

// METHOD
$params = array('vo' => 21);
$members = $client -> retrieveData("membersManager/getRichMembers", $params);

// ERROR WHILE DECODING RESPONSE
if($members === false){
    print "Error while parsing response.";
    exit;
}

// PRINTING DATA
print "<h1>Members of Metacentrum</h1>";
print "<h2>Example</h2>";
print "<table>\n";
print "  <tr>\n";
print "    <th>First name</th>\n";
print "    <th>Last name</th>\n";
print "  </tr>\n";

foreach($members as $richMember){
    print "  <tr>\n";
    print "    <td>{$richMember -> user -> firstName}</td>\n";
    print "    <td>{$richMember -> user -> lastName}</td>\n";
    print "  </tr>\n";
}

print "</table>\n";
