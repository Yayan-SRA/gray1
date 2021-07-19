<?php
function content_open()
{
    return '    <div class="header bg-primary pt-4 pb-9">
    <div class="container-fluid">
        <div class="header-body">';
}

function content_close()
{
    return '
    </div>
    </div>
</div>';
}
function content_open_user()
{
    return '    <div class="header">
    <div class="container-fluid">
        <div class="header-body">';
}

function content_close_user()
{
    return '
    </div>
    </div>
</div>';
}
