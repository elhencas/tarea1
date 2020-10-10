<?php

function setActive($routename)
{
    return request()->routeIS($routename) ? 'active' : '';
}
