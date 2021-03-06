<div id="pdw-panel-request" class="pdw-panel request">
    <div class="title">
        <h2>Request Info <a class='pdw-panel-close'>&times;</a></h2>
    </div>
    <div class="panel-content">
        <h3 class="collapser">$_SESSION</h3>
        <table class='pdw-data-table'>
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(isset($_SESSION)){
                foreach($_SESSION as $k=>$v):
                    $class = is_array($v)? "language-php" : "";
                    echo "<tr>";
                    echo '<td style="vertical-align: top;">'.$k.'</td>';
                    echo "<td><pre class=''><code class='{$class}'>";
                    if (is_object($v) && method_exists($v, 'toArray')) {
                        $v = $v->toArray();
                    } else {
                        $v = (array) $v;
                    }
                    print_r($v);
                    echo "</code></pre></td>";
                    echo "</tr>";
                endforeach;
            }
            ?>
            </tbody>
        </table>

        <h3 class="collapser'">$_COOKIE</h3>
        <table class='pdw-data-table'>
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($_COOKIE as $k=>$v):
                $class = is_array($v)? "language-php" : "";
                echo "<tr>";
                echo "<td>{$k}</td>";
                echo "<td><pre><code class='{$class}'>";
                print_r($v);
                echo "</code></pre></td>";
                echo "</tr>";
            endforeach;
            ?>
            </tbody>
        </table>

        <h3 class='collapser'>$_GET</h3>
        <table class='pdw-data-table'>
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($_GET as $k=>$v):
                $class = is_array($v)? "language-php" : "";
                echo "<tr>";
                echo "<td>{$k}</td>";
                echo "<td><pre><code class='{$class}'>";
                print_r($v);
                echo "</code></pre></td>";
                echo "</tr>";
            endforeach;
            ?>
            </tbody>
        </table>

        <h3 class='collapser'>$_POST</h3>
        <table class='pdw-data-table'>
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($_POST as $k=>$v):
                $class = is_array($v)? "language-php" : "";
                echo "<tr>";
                echo "<td>{$k}</td>";
                echo "<td><pre><code class='{$class}'>";
                print_r($v);
                echo "</code></pre></td>";
                echo "</tr>";
            endforeach;
            ?>
            </tbody>
        </table>

        <h3 class='collapser'>$_ENV</h3>
        <table class='pdw-data-table'>
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <?php
            exec("env", $env);
            sort($env);
            foreach($env as $d):
                list($k, $v) = explode('=', $d);
                if (empty(trim($v))) { $v = '<span style="font-style:italic:color:#666;">{ empty }</span>'; }
                if (in_array($k, ['DATABASE_READ_PASS', 'DATABASE_WRITE_PASS'])) { $v = '******'; }
                $class = is_array($v)? "language-php" : "";
                echo "<tr>";
                echo "<td>{$k}</td>";
                echo "<td><pre><code class='{$class}'>";
                print_r($v);
                echo "</code></pre></td>";
                echo "</tr>";
            endforeach;
            ?>
            </tbody>
        </table>

        <h3 class='collapser'>$_FILES</h3>
        <table class='pdw-data-table'>
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($_FILES as $k=>$v):
                $class = is_array($v)? "language-php" : "";
                echo "<tr>";
                echo "<td>{$k}</td>";
                echo "<td><pre><code class='{$class}'>";
                print_r($v);
                echo "</code></pre></td>";
                echo "</tr>";
            endforeach;
            ?>
            </tbody>
        </table>

    </div>
</div>
