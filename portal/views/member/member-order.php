<?php
    $member = new Member();
    $memberData = $member->getOneMemberByNo($_SESSION['user']['memNo']);
    $memOrigData = $member->getOneMemberByNo($_SESSION['user']['memNo']);

    $member->changeToReadable($memberData[0]);

    $or = new Orders();
    $orMemData = $or->getOrByMemberAndMethod($_SESSION['user']['memNo'],0);

    $pm = new Product_Manage();
    $pro = new Product();
?>

    <main role="main">
        <h1><span>會員中心</span><small>member center</small></h1>
        <section id="member-zone">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <?php
                        $active = 3;
                        require_once 'views/member/_left.php';
                        ?>
                    </div>
                    <div class="col-lg-9">
                        <div class="section-inner-table bg-white">
                            <table class="table table-borderless table-rwd">
                                <thead>
                                    <tr class="bg-pale">
                                        <th nowrap="nowrap">訂單編號</th>
                                        <th nowrap="nowrap">訂單日期</th>
                                        <th nowrap="nowrap">商品名稱</th>
                                        <th nowrap="nowrap">商品規格</th>
                                        <th nowrap="nowrap">商品型號</th>
                                        <th nowrap="nowrap">狀態</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if($orMemData != null && substr($orMemData['0']['orCaseNo'],-1) =="D"){
                                    foreach($orMemData as $key=>$value){
                                        $orig = $value;

                                        $or->changeToReadable($value,$value["orMethod"]);

                                        $pmData = $pm->getOnePMByNo($value["pmNo"]);

                                        $proData = $pro->getOneProByNo($pmData[0]["proNo"]);
                                        ?>
                                    <tr>
                                        <td data-th="訂單編號" nowrap="nowrap">
                                            <a style="text-decoration:underline;color:blue;" href="?item=member_center&action=order&orno=<?php echo $value["orNo"]; ?>">
                                                <?php echo $value["orCaseNo"]; ?>
                                            </a>
                                        </td>
                                        <td data-th="訂單日期" nowrap="nowrap"><?php echo $value["orDate"]; ?></td>
                                        <td data-th="商品名稱"><?php echo $proData[0]["proName"]; ?></td>
                                        <td data-th="商品規格" nowrap="nowrap"><?php echo $value["orProSpec"]; ?></td>
                                        <td data-th="商品型號" nowrap="nowrap"></td>
                                        <td data-th="狀態" nowrap="nowrap"><?php echo $value["orPaySuccess"] ?></td>
                                    </tr>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="6">沒有任何資料</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<script type="text/javascript">

    $("#copyButton").click(function() {
        copyToClipboard(document.getElementById("copyTarget"));
        alert('複製成功');
    });

    function copyToClipboard(elem) {
        // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);

        // copy the selection
        var succeed;
        try {
            succeed = document.execCommand("copy");
        } catch(e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }

        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }
        return succeed;
    }

</script>