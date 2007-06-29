<?php
/**
 * File containing the ezcConsoleDialogViewer class.
 *
 * @package ConsoleTools
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 */

/**
 * 
 * @package ConsoleTools
 * @version //autogen//
 */
class ezcConsoleDialogViewer
{
    /**
     * Displays a dialog and returns a valid result from it.
     * This methods displays a dialog in a loop, until it received a valid
     * result from it and returns this result.
     * 
     * @param ezcConsoleDialogDialog $dialog The dialog to display.
     * @return mixed The result from this dialog.
     */
    public static function displayDialog( ezcConsoleDialog $dialog )
    {
        do
        {
            $dialog->display();
        }
        while ( $dialog->hasValidResult() === false );
        return $dialog->getResult();
    }

    /**
     * Returns a line from STDIN.
     * The returned line is fully trimmed.
     * 
     * @return string
     */
    public static function readLine()
    {
        return ( trim( fgets( STDIN ) ) );
    }
}

?>
