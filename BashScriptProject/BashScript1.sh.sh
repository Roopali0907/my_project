mkdir ./hot-Folder

for myfile in  * ;
do
	if [ -f "$myfile" ]; then

		check=$(grep -ni "spo" "$myfile")
		if [ -z "$check" ]; then
			echo "EMPTY Files"
		else
			echo "Here Files are FOUND !"
			cp "$myfile" hot-Folder
			echo " " >> hot-Folder/"$myfile"
			echo "*******" >> hot-Folder/"$myfile"
			echo "$check" >> hot-Folder/"$myfile"
			
		fi
	else
		echo "$myfile  is not a file please check again"
		echo " "
	fi
		echo "----------------------------"
done
