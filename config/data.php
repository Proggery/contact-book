<?php
if ($_GET["page"] == "start") {
    return "Start";
} elseif ($_GET["page"] == "contacts") {
    return "Kontakte";
} elseif ($_GET["page"] == "addcontact") {
    return "Kontakt hinzufügen";
} elseif ($_GET["page"] == "legal") {
    return "Impressum";
}
