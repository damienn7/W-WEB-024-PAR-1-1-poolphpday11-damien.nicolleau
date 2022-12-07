<?php

try {
    call_pangolin();
    call_pangolin();
    call_pangolin();
    call_pangolin();
    call_pangolin();
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    throw $e;
} catch (Error $e)
{
    echo 'Caught error: ',  $e->getMessage(), "\n";
    throw $e;
} catch (RuntimeError $e)
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    throw $e;
}


