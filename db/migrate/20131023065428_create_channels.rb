class CreateChannels < ActiveRecord::Migration
  def change
    create_table :channels do |t|
      t.integer :ip_address
      t.integer :location_id
      t.string :name
      t.string :status
      t.integer :port
      t.string :conn_type

      t.timestamps
    end
  end
end
