                            <table class="invoice-details mdl-data-table  mdl-shadow--2dp">
                                <thead>
                                    <tr>
                                        <th colspan="3">Invoice No:</th>
                                        <th class="mdl-data-table__cell--non-numeric"><?php echo $invoice["Id"]?></th>
                                    </tr>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric" colspan="4"><h4>Sagar Auto Parts Sales and Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric" colspan="4">GF/12 Dev Archan, Opp Marshall Hotel<br />Near Bonny Travels, Paldi cross road,<br/>Paldi, Ahmebadad<br />Phone: 079-26577569</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Name</td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["Name"] ?></td>
                                        <td class="mdl-data-table__cell--non-numeric">Date</td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["InvoiceDate"] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Mobile Numer </td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["MobileNo"] ?></td>
                                        <td class="mdl-data-table__cell--non-numeric">Vehicle Type </td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["VehicleType"] ?></td>
                                    </tr>

                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Vehicle Numer </td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["VehicleNo"] ?></td>
                                        <td class="mdl-data-table__cell--non-numeric">Kms</td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["Kms"] ?></td>
                                    </tr>
                                </tbody>
                            </table>