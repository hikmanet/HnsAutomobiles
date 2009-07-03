Index: libs/model/dbo/dbo.php
===================================================================
--- libs/model/dbo/dbo.php	(revision 1727)
+++ libs/model/dbo/dbo.php	(working copy)
@@ -393,6 +393,17 @@
    }
 
 /**
+ * Return the SQL to force the table name of a result set
+ *
+ * @param string $name Name of table
+ * @return string SQL fragment
+ */
+   function resultTableName($name) { 
+       return("AS `" . $name . "`");
+   }
+
+
+/**
  * Outputs the contents of the log.
  *
  * @param boolean $sorted
@@ -468,4 +479,4 @@
    }
 }
 
-?>
\ No newline at end of file
+?>
