<?php
echo "Begin: Pull code from BitBucket<br/>";
exec('git pull git@bitbucket.org:jessicahawkins3344/jsquaredcreative.git', $output);
foreach ($output as $o) {
    echo $o . '<br/>';
}
echo "End: Pull code from BitBucket<br/>";