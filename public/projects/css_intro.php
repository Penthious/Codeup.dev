<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>css practice</title>
        <link rel="stylesheet" href="/css/site.css">
    </head>
    <body>
        <main class="main-section">
            <div class="first">
                <h3>Hello there lets get into some CSS fun shall we</h3>
                <p class="paragraph">Lets go ahead and make some paragraphs and and some style to them!</p>
                <p class="paragraph">This one has <span class="test">two classes</span> in it lets see what i can do to it with my current skills</p>
                <P class="test">Yet another thing to change</p>
            </div>
        </main>
    
            <h3> Just some forms here thats all</h3>
            <form method="post" action="/css_intro.php">
                <div class="second">
                    <label for="form"></label>
                    <select id="form" name="form">
                        <option name="q1" value="0">Click here</option>
                        <option class="test" name="q2" value="1">No click me</option>
                    </select>
                </div>
                <div>
                    <button type="submit">CLICK MEEEEEE!!!</button>
            </form>
            <form method="post" action="/css_intro.php">
                <div>
                    <label><input type="checkbox" value="0" name="q1">checkbox one</label>
                    <label><input type="checkbox" value="1" name="q2">checkbox two</label>
                <div>
                <div>
                    <button type="submit">Cick to send</button>
                <div>
            </form>
            <form method="post" action="/css_intro.php">
                <div>
                    <label><input type="radio" name="q1" value="yes">yes</label>
                    <label><input type="radio" name="q1" value="no">No</label>
                </div>
                <div>
                    <button type="submit">Submit</button>
            </form>
        <p> Now that I made a form lets go onto some recap from yesterday</p>
        <ol>
            <li>Line <span class="test"> item</span> one</li>
            <li>Line item two</li>
        </ol>
        <ul>
            <li>Line item one</li>
            <li>Line item two</li>
        </ul>
        <ul>
            <li>Some nesting going on here</li>
                <ol>
                    <li>Nested line item one</li>
                    <li>Nested line item two</li>
                </ol>
            <li>One more listed item</li>
                <ol>
                    <li>Nested line item one</li>
                    <li>Nested line item two</li>
                </ol>
        </ul>
        <table>
            <tr>
                <th>First row, First column</th>
                <th>First row, Second column</th>
            </tr>
            <tr>
                <td>Second row, First column</td>
                <td>Second row, Second column</td>
            </tr>
        </table>
    </body>
</html>
