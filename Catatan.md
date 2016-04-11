# Catatan
Ini adalah catatan saya tentang apa yang saya lakukan terhadap TP-LINK MR-3020

1. Exroot (External Root)

`# Note : FlashDrive harus sudah di partisi, sda1 ext4 dan sda2 swap`

	a. install packet exroot
	
	`# opkg install kmod-usb-storage kmod-fs-ext4 block-mount`
	
	b. salin file asli ke FlashDrive
	
	```
	 mkdir -p /mnt/sda1
	 mount /dev/sda1 /mnt/sda1
	 mkdir -p /tmp/cproot
	 mount --bind / /tmp/cproot
	 tar -C /tmp/cproot -cvf - . | tar -C /mnt/sda1 -xf -
	 umount /tmp/cproot
	 umount /mnt/sda1
	 /etc/init.d/fstab enable
	 /etc/init.d/fstab start
	```
	
	c. ubah config fstab
	
	` vi /etc/config/fstab`
	
	Ubah isinya dengan ini :
	
	```
	config global 'automount'
        	option from_fstab '1'
        	option anon_mount '1'

	config global 'autoswap'
        	option from_fstab '1'
        	option anon_swap '0'

	config mount
        	option fstype 'ext4'
        	option options 'rw,sync'
        	option target '/'
        	option device '/dev/sda1'
        	option uuid 'b263ce77-fb8b-4c35-8ae6-ba9f36f514bb' // cek dengan menggunakan perintah blkid
        	option enabled '1'

	config swap
        	option device '/dev/sda2'
        	option enabled '1'
	```

2. Install Packet modem

` opkg install comgt kmod-usb-serial kmod-usb-serial-option kmod-usb-serial-wwan usb-modeswitch usb-modeswitch-data luci-proto-3g`


config /etc/rc.local

rmmod leds_gpio

echo 0 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio0/direction

echo 17 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio17/direction

echo 26 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio26/direction

echo 27 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio27/direction

echo 7 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio7/direction

echo 29 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio29/direction

exit 0
