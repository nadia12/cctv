class ChangeColumnTypeIpaddress < ActiveRecord::Migration
	def up
		change_column :channels, :ip_address, :string
	end

	def down
	end

end
