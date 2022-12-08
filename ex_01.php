<?php

try {
    call_pangolin();
    call_pangolin();
    call_pangolin();
    call_pangolin();
    call_pangolin();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
    throw $e;
} catch (Error $e)
{
    echo $e->getMessage(), "\n";
    throw $e;
} catch (RuntimeError $e)
{
    echo $e->getMessage(), "\n";
    throw $e;
}


